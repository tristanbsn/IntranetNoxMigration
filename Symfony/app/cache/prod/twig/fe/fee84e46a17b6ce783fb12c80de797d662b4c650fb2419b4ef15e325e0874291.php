<?php

/* support/include/class.sequence.php */
class __TwigTemplate_0e4de033cb4c97eb569a315ae05fa25172575b43ea4569bcb4843ab5de7c9bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?php

require_once INCLUDE_DIR . 'class.orm.php';

class Sequence extends VerySimpleModel {

    static \$meta = array(
        'table' => SEQUENCE_TABLE,
        'pk' => array('id'),
        'ordering' => array('name'),
    );

    const FLAG_INTERNAL = 0x0001;

    /**
     * Function: next
     *
     * Fetch the next number in the sequence. The next number in the
     * sequence will be adjusted in the database so that subsequent calls to
     * this function should never receive the same result.
     *
     * Optionally, a format specification can be sent to the function and
     * the next sequence number will be returned padded. See the `::format`
     * function for more details.
     *
     * Optionally, a check callback can be specified to ensure the next
     * value of the sequence is valid. This might be useful for a
     * pseudo-random generator which might repeat existing numbers. The
     * callback should have the following signature and should return
     * boolean TRUE to approve the number.
     *
     * Parameters:
     * \$format - (string) Format specification for the result
     * \$check - (function(\$format, \$next)) Validation callback function
     *      where \$next will be the next value as an integer, and \$formatted
     *      will be the formatted version of the number, if a \$format
     *      parameter were passed to the `::next` method.
     *
     * Returns:
     * (int|string) - next number in the sequence, optionally formatted and
     * verified.
     */
    function next(\$format=false, \$check=false) {
        \$digits = \$format ? \$this->getDigitCount(\$format) : false;

        if (\$check && !is_callable(\$check))
            \$check = false;

        do {
            \$next = \$this->__next(\$digits);
            \$formatted = \$format ? \$this->format(\$format, \$next) : \$next;
        }
        while (\$check
                && !call_user_func_array(\$check, array(\$formatted, \$next)));

        return \$formatted;
    }

    /**
     * Function: current
     *
     * Peeks at the next number in the sequence without incrementing the
     * sequence.
     *
     * Parameters:
     * \$format - (string:optional) format string to receive the current
     *      sequence number
     *
     * Returns:
     * (int|string) - the next number in the sequence without advancing the
     * sequence, optionally formatted. See the `::format` method for
     * formatting details.
     */
     function current(\$format=false) {
        return \$format ? \$this->format(\$format, \$this->next) : \$this->next;
    }

    /**
     * Function: format
     *
     * Formats a number to the given format. The number will be placed into
     * the format string according to the locations of hash characters (#)
     * in the string. If more hash characters are encountered than digits
     * the digits are left-padded accoring to the sequence padding
     * character. If fewer are found, the last group will receive all the
     * remaining digits.
     *
     * Hash characters can be escaped with a backslash (\\#) and will emit a
     * single hash character to the output.
     *
     * Parameters:
     * \$format - (string) Format string for the number, e.g. \"TX-######-US\"
     * \$number - (int) Number to appear in the format. If not
     *      specified the next number in this sequence will be used.
     */
    function format(\$format, \$number) {
        \$groups = array();
        preg_match_all('/(?<!\\\\\\)#+/', \$format, \$groups, PREG_OFFSET_CAPTURE);

        \$total = 0;
        foreach (\$groups[0] as \$g)
            \$total += strlen(\$g[0]);

        \$number = str_pad(\$number, \$total, \$this->padding, STR_PAD_LEFT);
        \$output = '';
        \$start = \$noff = 0;
        // Interate through the ### groups and replace the number of hash
        // marks with numbers from the sequence
        foreach (\$groups[0] as \$g) {
            \$size = strlen(\$g[0]);
            // Add format string from previous marker to current ## group
            \$output .= str_replace('\\#', '#',
                substr(\$format, \$start, \$g[1] - \$start));
            // Add digits from the sequence number
            \$output .= substr(\$number, \$noff, \$size);
            // Set offset counts for the next loop
            \$start = \$g[1] + \$size;
            \$noff += \$size;
        }
        // If there are more digits of number than # marks, add the number
        // where the last hash mark was found
        if (strlen(\$number) > \$noff)
            \$output .= substr(\$number, \$noff);
        // Add format string from ending ## group
        \$output .= str_replace('\\#', '#', substr(\$format, \$start));
        return \$output;
    }

    function getDigitCount(\$format) {
        \$total = 0;
        \$groups = array();

        return preg_match_all('/(?<!\\\\\\)#/', \$format, \$groups);
    }

    /**
     * Function: __next
     *
     * Internal implementation of the next number generator. This method
     * will lock the database object backing to protect against concurent
     * ticket processing. The lock will be released at the conclusion of the
     * session.
     *
     * Parameters:
     * \$digits - (int:optional) number of digits (size) of the number. This
     *      is useful for random sequences which need a size hint to
     *      generate a \"next\" value.
     *
     * Returns:
     * (int) - The current number in the sequence. The sequence is advanced
     * and assured to be session-wise atomic before the value is returned.
     */
    function __next(\$digits=false) {
        // Ensure this block is executed in a single transaction
        db_autocommit(false);

        // Lock the database object -- this is important to handle concurrent
        // requests for new numbers
        static::objects()->filter(array('id'=>\$this->id))->lock()->one();

        // Increment the counter
        \$next = \$this->next;
        \$this->next += \$this->increment;
        \$this->updated = SqlFunction::NOW();
        \$this->save();

        db_autocommit(true);

        return \$next;
    }

    function hasFlag(\$flag) {
        return \$this->flags & \$flag != 0;
    }
    function setFlag(\$flag, \$value=true) {
        if (\$value)
            \$this->flags |= \$flag;
        else
            \$this->flags &= ~\$flag;
    }

    function getName() {
        return \$this->name;
    }

    function isValid() {
        if (!\$this->name)
            return 'Name is required';
        if (!\$this->increment)
            return 'Non-zero increment is required';
        if (!\$this->next || \$this->next < 0)
            return 'Positive \"next\" value is required';

        if (!\$this->padding)
            \$this->padding = '0';

        return true;
    }

    function __get(\$what) {
        // Pseudo-property for \$sequence->current
        if (\$what == 'current')
            return \$this->current();
        return parent::__get(\$what);
    }

    function __create(\$data) {
        \$instance = parent::create(\$data);
        \$instance->save();
        return \$instance;
    }
}

class RandomSequence extends Sequence {
    var \$padding = '0';

    // Override the ORM constructor and do nothing
    function __construct() {}

    function __next(\$digits=6) {
        if (\$digits < 6)
            \$digits = 6;

        return Misc::randNumber(\$digits);
    }

    function current(\$format=false) {
        return \$this->next(\$format);
    }

    function save() {
        throw new RuntimeException('RandomSequence is not database-backed');
    }
}
";
    }

    public function getTemplateName()
    {
        return "support/include/class.sequence.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/class.sequence.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.sequence.php");
    }
}