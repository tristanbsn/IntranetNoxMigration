<?php

/* support/js/redactor-fonts.js */
class __TwigTemplate_8fd912daec21aa8b32dd60e39afaeba73afbe904531e16ec4f7503d867fcc5af extends Twig_Template
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
        echo "if (!RedactorPlugins) var RedactorPlugins = {};

RedactorPlugins.fontfamily = {
    init: function ()
    {
        var fonts = [ 'Arial', 'Helvetica', 'Georgia', 'Times New Roman', __('Monospace') ];
        var that = this;
        var dropdown = {};

        \$.each(fonts, function(i, s)
        {
            dropdown['s' + i] = { title: '<span style=\"font-family:'+s+';\">'+s+'</style>', callback: function() { that.setFontfamily(s); }};
        });

        dropdown['remove'] = { title: 'Remove font', callback: function() { that.resetFontfamily(); }};

        this.buttonAddBefore('bold', 'fontfamily', __('Change font family'), false, dropdown);
    },
    setFontfamily: function (value)
    {
        this.inlineSetStyle('font-family', value);
    },
    resetFontfamily: function()
    {
        this.inlineRemoveStyle('font-family');
    }
};

RedactorPlugins.fontcolor = {
    init: function()
    {
        var colors = [
            '#ffffff', '#000000', '#eeece1', '#1f497d', '#4f81bd', '#c0504d', '#9bbb59', '#8064a2', '#4bacc6', '#f79646', '#ffff00',
            '#f2f2f2', '#7f7f7f', '#ddd9c3', '#c6d9f0', '#dbe5f1', '#f2dcdb', '#ebf1dd', '#e5e0ec', '#dbeef3', '#fdeada', '#fff2ca',
            '#d8d8d8', '#595959', '#c4bd97', '#8db3e2', '#b8cce4', '#e5b9b7', '#d7e3bc', '#ccc1d9', '#b7dde8', '#fbd5b5', '#ffe694',
            '#bfbfbf', '#3f3f3f', '#938953', '#548dd4', '#95b3d7', '#d99694', '#c3d69b', '#b2a2c7', '#b7dde8', '#fac08f', '#f2c314',
            '#a5a5a5', '#262626', '#494429', '#17365d', '#366092', '#953734', '#76923c', '#5f497a', '#92cddc', '#e36c09', '#c09100',
            '#7f7f7f', '#0c0c0c', '#1d1b10', '#0f243e', '#244061', '#632423', '#4f6128', '#3f3151', '#31859b',  '#974806', '#7f6000'
        ];

        var buttons = ['fontcolor', 'backcolor'];

        for (var i = 0; i < 2; i++)
        {
            var name = buttons[i];

            var \$dropdown = \$('<div class=\"redactor_dropdown redactor_dropdown_box_' + name + '\" style=\"display: none; width: 265px;\">');

            this.pickerBuild(\$dropdown, name, colors);
            \$(this.\$toolbar).append(\$dropdown);

            var btn = this.buttonAddBefore('deleted', name, this.opts.curLang[name], \$.proxy(function(btnName, \$button, btnObject, e)
            {
                this.dropdownShow(e, btnName);

            }, this));

            btn.data('dropdown', \$dropdown);
        }
    },
    pickerBuild: function(\$dropdown, name, colors)
    {
        var rule = 'color';
        if (name === 'backcolor') rule = 'background-color';

        var _self = this;
        var onSwatch = function(e)
        {
            e.preventDefault();

            var \$this = \$(this);
            _self.pickerSet(\$this.data('rule'), \$this.attr('rel'));

        };

        var len = colors.length;
        for (var z = 0; z < len; z++)
        {
            var color = colors[z];

            var \$swatch = \$('<a rel=\"' + color + '\" data-rule=\"' + rule +'\" href=\"#\" style=\"float: left; font-size: 0; border: 2px solid #fff; padding: 0; margin: 0; width: 20px; height: 20px;\"></a>');
            \$swatch.css('background-color', color);
            \$dropdown.append(\$swatch);
            \$swatch.on('click', onSwatch);
        }

        var \$elNone = \$('<a href=\"#\" style=\"display: block; clear: both; padding: 4px 0; font-size: 11px; line-height: 1;\"></a>')
        .html(this.opts.curLang.none)
        .on('click', function(e)
        {
            e.preventDefault();
            _self.pickerSet(rule, false);
        });

        \$dropdown.append(\$elNone);
    },
    pickerSet: function(rule, type)
    {
        this.bufferSet();

        this.\$editor.focus();
        this.inlineRemoveStyle(rule);
        if (type !== false) this.inlineSetStyle(rule, type);
        if (this.opts.air) this.\$air.fadeOut(100);
        this.sync();
    }
};

RedactorPlugins.fontsize = {
\tinit: function()
\t{
\t\tvar fonts = [10, 14, 22, 32];
\t\tvar that = this;
\t\tvar dropdown = {};

\t\t\$.each(fonts, function(i, s)
\t\t{
\t\t\tdropdown['s' + i] = {
                title: '<span style=\"font-size:'+s+'px\">'+s+'px</span>',
                callback: function() { that.setFontsize(s); } };
\t\t});

\t\tdropdown['remove'] = { title: __('Remove font size'), callback: function() { that.resetFontsize(); } };

\t\tthis.buttonAddAfter('formatting', 'fontsize', __('Change font size'), false, dropdown);
\t},
\tsetFontsize: function(size)
\t{
\t\tthis.inlineSetStyle('font-size', size + 'px');
\t},
\tresetFontsize: function()
\t{
\t\tthis.inlineRemoveStyle('font-size');
\t}
};

RedactorPlugins.textdirection = {
    init: function()
    {
        var that = this;
        var dropdown = {};

        dropdown.ltr = { title: __('Left to Right'), callback: this.setLtr };
        dropdown.rtl = { title: __('Right to Left'), callback: this.setRtl };

        var button = this.buttonAdd('textdirection', __('Change Text Direction'),
            false, dropdown);

        if (this.opts.direction == 'rtl')
            this.setRtl();
    },
    setRtl: function()
    {
        var c = this.getCurrent(), s = this.getSelection();
        this.bufferSet();
        if (s.type == 'Range' && s.focusNode.nodeName != 'div') {
            this.linebreakHack(s);
        }
        else if (!c) {
            var repl = '<div dir=\"rtl\">' + this.get() + '</div>';
            this.set(repl, false);
        }
        \$(this.getCurrent()).attr('dir', 'rtl');
        this.sync();
    },
    setLtr: function()
    {
        var c = this.getCurrent(), s = this.getSelection();
        this.bufferSet();
        if (s.type == 'Range' && s.focusNode.nodeName != 'div') {
            this.linebreakHack(s);
        }
        else if (!c) {
            var repl = '<div dir=\"ltr\">' + this.get() + '</div>';
            this.set(repl, false);
        }
        \$(this.getCurrent()).attr('dir', 'ltr');
        this.sync();
    },
    linebreakHack: function(sel) {
        var range = sel.getRangeAt(0);
        var wrapper = document.createElement('div');
        wrapper.appendChild(range.extractContents());
        range.insertNode(wrapper);
        this.selectionElement(wrapper);
    }
};
";
    }

    public function getTemplateName()
    {
        return "support/js/redactor-fonts.js";
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
        return new Twig_Source("", "support/js/redactor-fonts.js", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\js\\redactor-fonts.js");
    }
}