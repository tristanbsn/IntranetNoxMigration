<?php

/* support/include/ajax.sequence.php */
class __TwigTemplate_99a0b553dcd139bf5027060e7b536c732b27994a6dc9c5b4f98079eb325d60b5 extends Twig_Template
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

require_once(INCLUDE_DIR . 'class.sequence.php');

class SequenceAjaxAPI extends AjaxController {

    /**
     * Ajax: GET /sequence/<id>
     *
     * Fetches the current value of a sequence
     *
     * Get-Arguments:
     * format - (string) format string used to format the current value of
     *      the sequence.
     *
     * Returns:
     * (string) Current sequence number, optionally formatted
     *
     * Throws:
     * 403 - Not logged in
     * 404 - Unknown sequence id
     * 422 - Invalid sequence id
     */
    function current(\$id) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, 'Login required');
        elseif (\$id == 0)
            \$sequence = new RandomSequence();
        elseif (!\$id || !is_numeric(\$id))
            Http::response(422, 'Id is required');
        elseif (!(\$sequence = Sequence::lookup(\$id)))
            Http::response(404, 'No such object');

        return \$sequence->current(Format::htmlchars(\$_GET['format']));
    }

    /**
     * Ajax: GET|POST /sequence/manage
     *
     * Gets a dialog box content or updates data from the content
     *
     * Post-Arguments:
     * seq[<id>][*] - Updated information for existing sequences
     * seq[<new-*>[*] - Information for new sequences
     * seq[<id>][deleted] - If set to true, indicates that the sequence
     *      should be deleted from the database
     *
     * Throws:
     * 403 - Not logged in
     * 422 - Information sent for update of unknown sequence
     */
    function manage() {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, 'Login required');

        \$sequences = Sequence::objects()->all();
        \$info = array(
            'action' => '#sequence/manage',
        );

        \$valid = true;
        if (\$_POST) {
            foreach (\$_POST['seq'] as \$id=>\$info) {
                if (strpos(\$id, 'new-') === 0) {
                    unset(\$info['id']);
                    \$sequences[] = Sequence::create(\$info);
                }
                else {
                    foreach (\$sequences as \$s) {
                        if (\$s->id == \$id)
                            break;
                        \$s = false;
                    }
                    if (!\$s) {
                        Http::response(422, \$id . ': Invalid or unknown sequence');
                    }
                    elseif (\$info['deleted']) {
                        \$s->delete();
                        continue;
                    }
                    foreach (\$info as \$f=>\$val) {
                        if (isset(\$s->{\$f}))
                            \$s->set(\$f, \$val);
                        elseif (\$f == 'current')
                            \$s->next = \$val;
                    }
                    if ((\$v = \$s->isValid()) !== true) {
                        \$msg = sprintf('%s: %s', \$s->getName(), \$valid);
                        \$valid = false;
                    }
                }
            }
            if (\$valid) {
                foreach (\$sequences as \$s)
                    \$s->save();
                Http::response(205, 'All sequences updated');
            }
        }

        include STAFFINC_DIR . 'templates/sequence-manage.tmpl.php';
    }
}
";
    }

    public function getTemplateName()
    {
        return "support/include/ajax.sequence.php";
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
        return new Twig_Source("", "support/include/ajax.sequence.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\ajax.sequence.php");
    }
}
