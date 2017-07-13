<?php

/* support/include/mpdf/classes/indic.php */
class __TwigTemplate_e118ddb7e66fdff71bdc88df53e47b05ef57061bb788f748dc23c4dc91d6339b extends Twig_Template
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

class indic {

function indic() {

}


function substituteIndic(\$earr, \$lang, \$font) {
\tglobal \$voltdata;

\tif (!isset(\$voltdata[\$font])) {
\t\tinclude_once(_MPDF_PATH.'includes/'.\$font.'.volt.php');
\t\t\$voltdata[\$font] = \$volt;
\t}

\tforeach(\$earr as \$eid=>\$char) {
\t\t\$earr[\$eid] = sprintf(\"%04s\", strtoupper(dechex(\$char))); 
\t}
\t\$vstr = \"0020 \".implode(\" \",\$earr).\" 0020\";
\t//============================
\t// Common Indic Punctuation marks
\t// If NOT devanagari
\tif (\$lang!='hi') {
\t\t\$vstr = str_replace('0964','007C', \$vstr);\t// U+0964 replace with \"|\"
\t\t\$vstr = str_replace('0965','007C 007C', \$vstr);\t// U+0964 replace with \"|\"
\t}
\t//============================
\t// Tamil numeral for Zero missing Added mPDF 4.2
\tif (\$lang=='ta') {
\t\t\$vstr = str_replace('0BE6','0030', \$vstr);\t// U+0BEB replace with \"0\"
\t}

\t//============================
\t// Re-order vowels

\t// DEVANAGARI vowel sign matraI[093F] before consonant
\tif (\$lang=='hi') {
\t\t\$prebasedvowels = \"(093F)\";
\t\t\$nukta = \"093C\";
\t\t\$halant = \"094D\";
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.' '.\$nukta.'/','\\\\2 \\\\1 '.\$nukta, \$vstr);\t// before NUKTA
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$prebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT  ==  VIRAMA
\t}

\t// BENGALI vowels [09BF 09C7 09C8]
\telse if (\$lang=='bn') {

\t\t// Khanda Ta 09CE not in font -> replace with 09A4|09CD
\t\t\$vstr = preg_replace('/09CE/','09A4 09CD 200D', \$vstr);\t// mPDF 5.3.09

\t\t// BENGALI double-part vowels [09CB 09C7 09BE][09CC 09C7 09D7]
\t\t\$vstr = str_replace('09CB','09C7 09BE', \$vstr);\t// convert to 2 parts
\t\t\$vstr = str_replace('09CC','09C7 09D7', \$vstr);\t// 09C7 pre-based is then shifted below
\t\t\$prebasedvowels = \"(09BF|09C7|09C8)\";
\t\t\$nukta = \"09BC\";
\t\t\$halant = \"09CD\";
\t\t// mPDF 5.0.044
\t\t\$bnfullcons = \"0995|0996|0997|0998|0999|099A|099B|099C|099D|099F|09A0|09A1|09A2|09A3|09A4|09A5|09A6|09A7|09A8|09AA|09AB|09AC|09AD|09AE|09AF|09B0|09B2|09B6|09B7|09B8|09B9|09DC|09DD|09DF\";
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.' '.\$nukta.'/','\\\\2 \\\\1 '.\$nukta, \$vstr);\t// before NUKTA
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$prebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT
\t\t// mPDF 5.0.044
\t\t// .. and shifting left-based vowel further to the left in case 3 consonants together.
\t\t\$vstr = preg_replace('/('.\$bnfullcons.') '.\$halant.' '.\$prebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);

\t\t// mPDF 5.0.044
\t\t// If left-based vowel has now been shifted to left of RA/Halant (09B0/09CD)
\t\t// Convert here to above-line form (E068) as it would get missed later
\t\t// e.g. 09B0 09CD 09AD 09C7 would be changed above => 
\t\t// e.g. 09C7 09B0 09CD 09AD. The 09B0 09CD should => E068
\t\t// ??? need to add 09BF as well (09BF|09C7|09C8)
\t\t\$vstr = preg_replace('/(09C7|09C8) 09B0 09CD/', '\\\\1 E068', \$vstr);

\t}

\t// GUJARATI pre-based vowel [0ABF]
\telse if (\$lang=='gu') {
\t\t\$prebasedvowels = \"(0ABF)\";
\t\t\$nukta = \"0ABC\";
\t\t\$halant = \"0ACD\";
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.' '.\$nukta.'/','\\\\2 \\\\1 '.\$nukta, \$vstr);\t// before NUKTA
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$prebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT
\t}

\t// GURMUKHI/PUNJABI pre-based vowel [0ABF]
\telse if (\$lang=='pa') {
\t\t\$prebasedvowels = \"(0A3F)\";
\t\t\$nukta = \"0A3C\";
\t\t\$halant = \"0A4D\";
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.' '.\$nukta.'/','\\\\2 \\\\1 '.\$nukta, \$vstr);\t// before NUKTA 
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$prebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT
\t}

\t// TAMIL pre-based vowel [0ABF]
\telse if (\$lang=='ta') {
\t\t// Shrii (Shree)
\t\t\$vstr = preg_replace('/0BB6 0BCD 0BB0 0BC0/','E04B', \$vstr);

\t\t// TAMIL double-part vowels [0BCA 0BC6 0BBE][0BCB 0BC7 0BBE][0BCC 0BC6 0BD7]
\t\t\$vstr = preg_replace('/0BCA/','0BC6 0BBE', \$vstr);\t// convert to 2 parts
\t\t\$vstr = preg_replace('/0BCB/','0BC7 0BBE', \$vstr);\t// pre-based is then shifted below
\t\t\$vstr = preg_replace('/0BCC/','0BC6 0BD7', \$vstr);
\t\t\$prebasedvowels = \"(0BC6|0BC7|0BC8)\";
\t\t// No nukta
\t\t\$halant = \"0BCD\";\t// Doesn't seem to move most in front of halanted consonants
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$prebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t// ? Only for special case KSS (already moved to left of 0BB7)
\t\t\$vstr = preg_replace('/0B95 '.\$halant.' '.\$prebasedvowels.' 0BB7/','\\\\1 0B95 '.\$halant.' 0BB7', \$vstr);
\t}

\t// ORIYA
\telse if (\$lang=='or') {
\t\t// ORIYA double-part vowels []
\t\t\$vstr = str_replace('0B48','0B47 0B56', \$vstr);\t// 2-part Vowel
\t\t\$vstr = str_replace('0B4B','0B47 0B3E', \$vstr);\t// 2-part Vowel
\t\t\$vstr = str_replace('0B4C','0B47 0B57', \$vstr);\t// 2-part Vowel
\t\t\$orprebasedvowels = \"(0B47)\";
\t\t// No nukta
\t\t\$halant = \"0B4D\";\t
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$orprebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$orprebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$orprebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT
\t}

\t// MALAYALAM
\telse if (\$lang=='ml') {
\t\t// Chillus - old forms - remove ZWNJ after
\t\t// This font Volt rules recognises e.g. \"Na Halant(Virama)\" as ChilluN 
\t\t\$vstr = preg_replace('/(0D23 0D4D|0D28 0D4D|0D30 0D4D|0D32 0D4D|0D33 0D4D) 200D/','\\\\1', \$vstr);
\t\t// See Chillus in Unicode [http://en.wikipedia.org/wiki/Malayalam_script]
\t\t\$vstr = str_replace('0D7A','0D23 0D4D', \$vstr);\t// [mlymChilluNn] 
\t\t\$vstr = str_replace('0D7B','0D28 0D4D', \$vstr);\t// [mlymChilluN] 
\t\t\$vstr = str_replace('0D7C','0D30 0D4D', \$vstr);\t// [mlymChilluR] 
\t\t\$vstr = str_replace('0D7D','0D32 0D4D', \$vstr);\t// [mlymChilluL] 
\t\t\$vstr = str_replace('0D7E','0D33 0D4D', \$vstr);\t// [mlymChilluLl] 
/*
\t\t// Chillus - 0D7A-0D7E not in font directly, but as E005-E009
\t\t\$vstr = preg_replace('/0D23 0D4D 200D/','0D7A', \$vstr);
\t\t\$vstr = preg_replace('/0D28 0D4D 200D/','0D7B', \$vstr);
\t\t\$vstr = preg_replace('/0D30 0D4D 200D/','0D7C', \$vstr);
\t\t\$vstr = preg_replace('/0D32 0D4D 200D/','0D7D', \$vstr);
\t\t\$vstr = preg_replace('/0D33 0D4D 200D/','0D7E', \$vstr);

\t\t\$vstr = preg_replace('/0D7F/','E004', \$vstr);\t// [mlymChilluK] 
\t\t\$vstr = preg_replace('/0D7A/','E005', \$vstr);\t// [mlymChilluNn] 
\t\t\$vstr = preg_replace('/0D7B/','E006', \$vstr);\t// [mlymChilluN] 
\t\t\$vstr = preg_replace('/0D7C/','E007', \$vstr);\t// [mlymChilluR] 
\t\t\$vstr = preg_replace('/0D7D/','E008', \$vstr);\t// [mlymChilluL] 
\t\t\$vstr = preg_replace('/0D7E/','E009', \$vstr);\t// [mlymChilluLl] 
*/

\t\t// MALAYALAM double-part vowels []
\t\t\$vstr = str_replace('0D4A','0D46 0D3E', \$vstr);\t// 2-part Vowel
\t\t\$vstr = str_replace('0D4B','0D47 0D3E', \$vstr);\t// 2-part Vowel
\t\t\$vstr = str_replace('0D4C','0D46 0D57', \$vstr);\t// 2-part Vowel
\t\t\$mlprebasedvowels = \"(0D46|0D47|0D48)\";
\t\t// No nukta
\t\t\$halant = \"0D4D\";\t
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$mlprebasedvowels.'/','\\\\2 \\\\1', \$vstr);\t// vowel sign pre-based shift left
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$mlprebasedvowels.'/','\\\\2 \\\\1 '.\$halant, \$vstr);\t// before CHAR HALANT
\t}

\t// TELUGU 
\telse if (\$lang=='te') {
\t\t// TELUGU double-part vowels [0C48 -> 0C46 0C56]
\t\t\$vstr = str_replace('0C48','0C46 0C56', \$vstr);\t// 2-part Vowel 
\t\t\$prebasedvowels = \"(0C46)\";
\t\t\$abvvowels = \"(0C3E|0C3F|0C40|0C46|0C47|0C4A|0C4B|0C4C|0C55)\";
\t\t// No nukta
\t\t\$halant = \"0C4D\";\t
\t\t\$tefullforms = \"0C15|0C17|0C18|0C1A|0C1B|0C1C|0C1D|0C20|0C21|0C22|0C24|0C25|0C26|0C27|0C28|0C2A|0C2B|0C2D|0C2E|0C2F|0C30|0C33|0C35|0C36|0C37|0C38|0C39|E028|E029|E02A|E02B|E078|E07A|E07B\";
\t\t\$vstr = preg_replace('/('.\$tefullforms .') '.\$halant.' ('.\$tefullforms .') '.\$abvvowels .'/','\\\\1 \\\\3 '.\$halant.' \\\\2', \$vstr);\t// before HALANT
\t}


\t// KANNADA
\telse if (\$lang=='kn') {
\t\t// KANNADA double-part vowels [0CC8 -> 0CC6 0CD6]
\t\t\$vstr = str_replace('0CC0','0CBF 0CD5', \$vstr);\t// 2-part Vowel 
\t\t\$vstr = str_replace('0CC7','0CC6 0CD5', \$vstr);\t// 2-part Vowel 
\t\t\$vstr = str_replace('0CC8','0CC6 0CD6', \$vstr);\t// 2-part Vowel AI - no glyph for single
\t\t\$vstr = str_replace('0CCA','0CC6 0CC2', \$vstr);\t// 2-part Vowel 
\t\t\$vstr = str_replace('0CCB','0CC6 0CC2 0CD5', \$vstr);\t// 2-part Vowel 
\t\t\$prebasedvowels = \"(0CBF|0CC6)\";
\t\t\$halant = \"0CCD\";\t
\t}


\t//============================

\t// SPECIALS

\t// DEVANAGARI Ra Halant Ra
\tif (\$lang=='hi') {
\t\t\$vstr = str_replace('0930 094D 0930','E05D 0930', \$vstr);\t// Ra Halant Ra => halfRa FullRa
\t}

\t// GUJARATI
\tif (\$lang=='gu') {
\t\t\$vstr = str_replace('0AB0 0AC2','E02E', \$vstr);\t// Ra VowelUu => SpecialForm RaUu
\t}

\t// TELUGU Ra Halant <Consonant> Halant => halfRa Halant<Consonant> Halant 
\tif (\$lang=='te') {
\t\t\$vstr = preg_replace('/0C30 0C4D ([A-F0-9]{4}) 0C4D/','E021 0C4D \\\\1 0C4D', \$vstr);\t
\t}

\t// KANNADA 
\t// Reph at end of word becomes E0CC instead of E00B
\tif (\$lang=='kn') {
\t\t\$vstr = str_replace('0CB0 0CCD 0020','E0CC 0020', \$vstr);\t// mPDF 5.3.87
\t}


\t//============================
\t// MAIN BIT FROM VOLT RULES
\tforeach(\$voltdata[\$font] AS \$rid=>\$reps) {
//echo \$rid . ':  ' . \$vstr.'<br />';
\t\t\$vstr = preg_replace('/'.\$reps['match'].'/',\$reps['replace'], \$vstr);
\t} 
//echo \$vstr.'<br />'; exit;


\t//============================

\t// SPECIALS

\t// KANNADA 
\t// <Base> <BelowBase1> [<BelowBase2> ] MatraI -> <Base/MatraI ligature> <Belowbase1> etc
\tif (\$lang=='kn') {
\t\t\$matraI = \"0CBF\";
\t\t\$knbase = preg_split('/\\|/', \"0C95|0C96|0C97|0C98|0C9A|0C9B|0C9C|0C9D|0CA0|0CA1|0CA2|0CA3|0CA4|0CA5|0CA6|0CA7|0CA8|0CAA|0CAB|0CAC|0CAD|0CAE|0CAF|0CB0|0CB2|0CB3|0CB5|0CB6|0CB7|0CB8|0CB9|E0A3|E07D|E07E\");
\t\t\$knmatraIligature = preg_split('/\\|/', \"E082|E083|E084|E085|E086|E087|E088|E089|E08A|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A4|E0A1|E0A2\");
\t\t\$belowbase1 = \"E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037|E038|E039|E03A|E03B|E03C|E03D|E03E|E03F|E040|E041|E042|E043|E044|E045|E046|E047|E048|E049|E04A|E04B|E04C|E04D|E04E|E04F|E050|E081\";
\t\t\$belowbase2 = \"E052|E053|E054|E055|E056|E057|E058|E059|E05A|E05B|E05C|E05D|E05E|E05F|E060|E061|E062|E063|E064|E065|E066|E067|E068|E069|E06A|E06B|E06C|E06D|E06E|E06F|E070|E071|E072|E073|E074|E081\";
\t\tfor (\$i=0; \$i<count(\$knbase);\$i++) {
\t\t\t\$vstr = preg_replace('/'.\$knbase[\$i].' ('.\$belowbase1.') ('.\$belowbase2.') '.\$matraI.'/', \$knmatraIligature[\$i].' \\\\1 \\\\2', \$vstr);
\t\t\t\$vstr = preg_replace('/'.\$knbase[\$i].' ('.\$belowbase1.') '.\$matraI.'/', \$knmatraIligature[\$i].' \\\\1', \$vstr);
\t\t}
\t}

\t// KANNADA 
\t// [KanTtaFull] [matraI] => [KanTtaPartial] [matraI] 
\tif (\$lang=='kn') {
\t\t\$vstr = preg_replace('/0C9F '.\$matraI.'/', 'E015 '.\$matraI, \$vstr);
\t}

\t// ORIYA 
\tif (\$lang=='or') {
\t\t// SpecialCase Ra[0B30] Halant still left before [oryaFullNnNna] => E00F
\t\t\$vstr = preg_replace('/0B30 '.\$halant.' E00F/','E00F E069', \$vstr);\t// convert to Reph
\t}

\t//============================
\t// SHIFT REPH

\t// DEVANAGARI Shift Reph [E015]
\tif (\$lang=='hi') {
\t\t// FIRSTLY - halfRa = E05D - Change this to Reph [E015]
\t\t\$himatchhalfforms = \"E043|E044|E045|E046|E047|E048|E049|E04A|E04B|E04C|E04D|E04E|E04F|E050|E051|E052|E053|E054|E055|E056|E057|E058|E059|E05A|E05B|E05C|E05D|E05E|E05F|E060|E061|E062|E063|E064|E065|E066|E067|E068|E069|E06A|E06B|E06C|E06D|E06E|E06F|E070|E071|E072|E073|E074|E075|E076|E077|E078|E079|E07A|E07B|E07C|E07D|E07E|E07F|E080|E081|E082|E083|E084|E085|E086|E087|E088|E089|E08A|E0D3|E0D4|E0D5|E0D6|E0D7|E0D8|E0D9|E0DA|E0DB|E0DC|E0DD|E0DE|E0DF|E0E0|E0E1|E0E2|E0E3|E0E4|E0E5|E0E6|E0E7|E0E8|E0E9|E0EA|E0EB|E0EC|E0ED|E0EE|E0EF|E0F0|E0F1|E0F2|E0F3|E0F4|E0F5|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E13D|E13E|E13F|E140|E141|E142|E143|E144|E145\";
\t\t\$himatchfullforms = \"0915|0916|0917|0918|0919|091A|091B|091C|091D|091E|091F|0920|0921|0922|0923|0924|0925|0926|0927|0928|092A|092B|092C|092D|092E|092F|0930|0932|0933|0935|0936|0937|0938|0939|E028|E029|0958|0959|095A|E02A|E02B|E02C|E02D|095B|E02E|E02F|E030|E031|095C|095D|E032|E033|E034|E035|E036|0929|E037|095E|E038|E039|E03A|095F|0931|E03B|0934|E03C|E03D|E03E|E03F|E040|E041|E042|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A1|E0A2|E0A3|E0A4|E0A5|E0A6|E0A7|E0A8|E0A9|E0AA|E0AB|E0AC|E0AD|E0AE|E0AF|E0B0|E0B1|E0B2|E0B3|E0B4|E0B5|E0B6|E0B7|E0B8|E0B9|E0BA|E0BB|E0BC|E0BD|E0BE|E0BF|E0C0|E0C1|E0C2|E0C3|E0C4|E0C5|E0C6|E0C7|E0C8|E0C9|E0CA|E0CB|E0CC|E0CD|E0CE|E0CF|E0D0|E0D1|E0D2|E11E|E11F|E120|E121|E122|E123|E124|E125|E126|E127|E128|E129|E12A|E12B|E12C|E12D|E12E|E12F|E130|E131|E132|E133\";
\t\t\$vstr = preg_replace('/E05D ('.\$himatchhalfforms.'|'.\$himatchfullforms.')/', 'E015 \\\\1', \$vstr);

\t\t// Reph = E015 - Shift Right to just after end of syllable
\t\t// FullAllForms + HalfAllForms + 093E matraA
\t\twhile(preg_match('/E015 ('.\$himatchhalfforms.')/', \$vstr)) {
\t\t\t\$vstr = preg_replace('/E015 ('.\$himatchhalfforms.')/', '\\\\1 E015', \$vstr);
\t\t}
\t\t\$vstr = preg_replace('/E015 ('.\$himatchfullforms.')/', '\\\\1 E015', \$vstr);

\t\t// Now shift it beyond post-based vowels  // ??? Need to add others e.g. 0949,094A,094B,094C + presentation forms like E198
\t\t\$vstr = str_replace('E015 093E', '093E E015', \$vstr);
\t\t\$vstr = preg_replace('/E015 (0940|E194|E195|E196|E197|E198)/', '\\\\1 E014', \$vstr);\t// (Small) reph [E014] to Right of matraI
\t\t\$vstr = str_replace('E015 0947', '0947 E014', \$vstr);\t// (Small) reph [E014] to Right of matraI
\t}

\t// BENGALI Shift Reph [E068]
\telse if (\$lang=='bn') {
\t\t\$bnfullconjuncts = \"E002|E003|E004|E041|E042|E043|E044|E045|E046|E047|E048|E049|E04A|E04B|E04C|E04D|E04E|E04F|E050|E051|E052|E053|E054|E055|E056|E057|E058|E059|E05A|E05B|E05C|E05D|E05E|E05F|E060|E061|E062|E063|E064|E065|E06A|E06B|E06C|E06D|E06E|E06F|E070|E071|E072|E073|E074|E075|E076|E077|E078|E079|E07A|E07B|E07C|E07D|E07E|E07F|E080|E081|E082|E083|E084|E085|E086|E087|E088|E089|E08A|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A1|E0A2|E0A3|E0A4|E0A5|E0A6|E0A7|E0A8|E0A9|E0AA|E0AB|E0AC|E0AD|E0AE|E0AF|E0B0|E0B1|E0B2|E0B3|E0B4|E0B5|E0B6|E0B7|E0B8|E0B9|E0BA|E0BB|E0BC|E0BD|E0BE|E0BF|E0C0|E0C1|E0C2|E0C3|E0C4|E0C5|E0C6|E0C7|E0C8|E0C9|E0CA|E0CB|E0CC|E0CD|E0CE|E0CF|E0D0|E0D1|E0D2|E0D3|E0D4|E0D5|E0D6|E0D7|E0D8|E0D9|E0DA|E0DB|E0DC|E0DD|E0DE|E0DF|E0E0|E0E1|E0E2|E0E3|E0E4|E0E5|E0E6|E0E7|E0E8|E0E9|E0EA|E0EB|E0EC|E0ED|E0EE|E0EF|E0F0|E0F1|E0F2|E0F3|E0F4|E0F5|E0F6|E0F7|E0F8|E0F9|E0FA|E0FB|E0FC|E0FD|E0FE|E0FF|E100|E101|E102|E103|E104|E105|E106|E107|E108|E109|E10A|E10B|E10C|E10D|E10E|E10F|E110|E111|E112|E113|E114|E115|E116|E117|E118|E119|E11A|E11B|E11C|E11D|E11E|E11F|E120|E121|E122|E123|E124|E125|E126|E127|E128|E129|E12A|E12B|E12C|E12D|E12E|E12F|E130|E131|E132|E133|E134|E135|E136|E137|E138|E139|E13A|E13B|E13C|E13D|E13E|E13F|E140|E141|E142|E143|E144|E145|E146|E147|E148|E149|E14A|E14B|E14C|E14D|E14E|E14F|E150|E151|E152|E153|E154|E155|E156|E157|E158|E159|E15A|E15B|E15C|E15D|E15E|E15F|E160|E161|E162|E163|E164|E165|E166|E167|E168|E169|E16A|E16B|E16C|E16D|E16E|E16F|E170|E171|E172|E173|E174|E175|E176|E177|E178|E179|E17A|E17B|E17C|E17D|E17E|E17F|E180|E181|E182|E183|E184|E185|E186|E187|E188|E189|E18A|E18B|E18C|E18D|E18E|E18F|E190|E191|E192|E193|E194|E195|E196|E197|E198|E199|E19A\";
\t\t// \$bnfullcons - set above;
\t\t\$vstr = preg_replace('/E068 ('.\$bnfullconjuncts.'|'.\$bnfullcons.')/', '\\\\1 E068', \$vstr);
\t\t// ? Need to shift it beyond post-base vowels 09BE, 09C0, 09D7  haven't found so can't test??
\t\t\$vstr = preg_replace('/E068 (09BE|09C0|09D7)/', '\\\\1 E068', \$vstr);
\t}

\t// GUJARATI Shift Reph [E032]
\telse if (\$lang=='gu') {
\t\t\$gufullforms = \"0A95|0A96|0A97|0A98|0A99|0A9A|0A9B|0A9C|0A9D|0A9E|0A9F|0AA0|0AA1|0AA2|0AA3|0AA4|0AA5|0AA6|0AA7|0AA8|0AAA|0AAB|0AAC|0AAD|0AAE|0AAF|0AB0|0AB2|0AB3|0AB5|0AB6|0AB7|0AB8|0AB9|E002|E003|E004|E005|E006|E007|E008|E009|E00A|E00B|E00C|E00D|E00E|E00F|E010|E011|E012|E013|E014|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E022|E023|E024|E025|E026|E027|E05E|E05F|E060|E061|E062|E063|E064|E065|E066|E067|E068|E069|E06A|E06B|E06C|E06D|E06E|E06F|E070|E071|E072|E073|E074|E075|E076|E077|E078|E079|E07A|E07B|E07C|E07D|E07E|E07F|E080|E081|E082|E083|E084|E085|E086|E087|E088|E089|E08A|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A1|E0A2|E0A3|E0A4|E0A5\";
\t\t\$vstr = preg_replace('/E032 ('.\$gufullforms.')/', '\\\\1 E032', \$vstr);
\t\t// Now shift it beyond post-based vowels  // ??? Need to add others e.g. 0949,094A,094B,094C + presentation forms like E198
\t\t// ? Need to shift it beyond post-base vowels 0ABE, 0AC0 haven't found so can't test??
\t\t\$vstr = preg_replace('/E032 (0ABE|0AC0)/', '\\\\1 E032', \$vstr);
\t}


\t// TELUGU Shift Reph to LEFT [E046|E069|E077]    [TelRaSmallOne] => E046    [TelRaSmallTwo] => E069    [TelRaSmallThree] => E077
\telse if (\$lang=='te') {
\t\t// tefullforms defined earlier
\t\t\$tepartialforms = \"E00D|E00E|E00F|E010|E011|E012|E013|E014|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E022|E023|E024|E025|E026|E027|E07C|E07D|E07E\";
\t\t\$matraligs = \"E07F|E080|E081|E082|E083|E084|E085|E086|E087|E088|E089|E08A|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A1|E0A2|E0A3|E0A4|E0A5|E0A6|E0A7|E0A8|E0A9|E0AA|E0AB|E0AC|E0AD|E0AE|E0AF\";
\t\t\$tevowels = \"0C3E|0C3F|0C40|0C46|0C47|0C56|0C4A|0C4B|0C4C\"
\t\t.\"|0C41|0C42|0C43|0C44\";\t\t// post matras
\t\t\$vstr = preg_replace('/('.\$tevowels.') (E046|E069|E077)/', '\\\\2 \\\\1', \$vstr);
\t\twhile(preg_match('/('.\$tepartialforms.') (E046|E069|E077)/', \$vstr)) {
\t\t\t\$vstr = preg_replace('/('.\$tepartialforms.') (E046|E069|E077)/', '\\\\2 \\\\1', \$vstr);
\t\t}
\t\t\$vstr = preg_replace('/('.\$tefullforms .'|'.\$matraligs.') (E046|E069|E077)/', '\\\\2 \\\\1', \$vstr);
\t}


\t// KANNADA Shift Reph to  RIGHT [E00B]
\telse if (\$lang=='kn') {
\t\t\$knfullforms = \"0C95|0C96|0C97|0C98|0C99|0C9A|0C9B|0C9C|0C9D|0C9E|0C9F|0CA0|0CA1|0CA2|0CA3|0CA4|0CA5|0CA6|0CA7|0CA8|0CAA|0CAB|0CAC|0CAD|0CAE|0CAF|0CB0|0CB1|0CB2|0CB3|0CB5|0CB6|0CB7|0CB8|0CB9|E07D|E07E|E0A3\";
\t\t\$knpartialforms = \"E00C|E00D|E00E|E00F|E010|E011|E012|E013|E014|0C9E|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E022|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E07F\";
\t\twhile(preg_match('/E00B ('.\$knpartialforms.')/', \$vstr)) {
\t\t\t\$vstr = preg_replace('/E00B ('.\$knpartialforms.')/', '\\\\1 E00B', \$vstr);
\t\t}
\t\t// mPDF 5.3.47  Also move Reph to right of matraIligatures
\t\t\$knfullforms .= \"|E082|E083|E084|E085|E086|E087|E088|E089|E08A|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A4|E0A1|E0A2\";
\t\t\$vstr = preg_replace('/E00B ('.\$knfullforms.')/', '\\\\1 E00B', \$vstr);

\t\t// ? Need to shift it beyond base or below-base forms - haven't found so can't test??
\t\t// mPDF 5.3.87
\t\t// E004 added to list (which is a transformed version of 0CBE)
\t\t\$knvowels = \"0CBE|0CC0|0CC1|0CC2|0CC3|0CC4|0CC7|0CC8|0CCA|0CCB|0CD5|0CD6|E004\";
\t\t\$vstr = preg_replace('/E00B ('.\$knvowels.')/', '\\\\1 E00B', \$vstr);
\t}


\t// ORIYA Shift Reph to  RIGHT [E069|E06A|E06B|E06C]
\telse if (\$lang=='or') {
\t\t\$orrephs = \"E069|E06A|E06B|E06C\";
\t\t\$orfullforms = \"0B15|0B16|0B17|0B18|0B19|0B1A|0B1B|0B1C|0B1D|0B1E|0B1F|0B20|0B21|0B22|0B23|0B24|0B25|0B26|0B27|0B28|0B29|0B2A|0B2B|0B2C|0B2D|0B2E|0B2F|0B30|0B31|0B32|0B33|0B34|0B35|0B36|0B37|0B38|E003|E004|E005|E006|E007|E008|E009|E00A|E00B|E00C|E00D|E00E|E00F|E010|E011|E012|E013|E014|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E022|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037\";
\t\t// E123 - E147  FullHalant forms ? add to FullForms
\t\t\$orpartialforms = \"E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A1|E0A2|E0A3|E0A4|E0A5|E0A6|E0A7|E0A8|E0A9|E0AA|E0AB|E0AC|E0AD|E0AE|E0AF|E0B0|E0B1|E0B2|E0B3|E0B4|E0B5|E0B6|E0B7|E0B8|E0B9|E0BA|E0BB|E0BC|E0BD|E0BE|E0BF|E0C0|E0C1|E0C2|E0C3|E0C4|E0C5|E0C6|E0C7|E0C8|E0C9|E0CA|E0CB|E0CC|E0CD|E0CE|E0CF|E0D0|E0D1|E0D2|E0D3|E0D4|E0D5|E0D6|E0D7|E0D8|E0D9|E0DA|E0DB|E0DC|E0DD|E0DE|E0DF|E0E0|E0E1|E0E2|E0E3|E0E4|E0E5|E0E6|E0E7|E0E8|E0E9|E0EA|E0EB|E0EC|E0ED|E0EE|E0EF|E0F0|E0F1|E0F2|E0F3|E0F4|E0F5\";

\t\t// Combined MatraIReph[E06D] split [0B3F & E069] to allow reph to be shifted forwards
\t\t\$vstr = preg_replace('/('.\$orfullforms.') E06D ('.\$orfullforms.') 0B3E/', '\\\\1 0B3F E069 \\\\2 0B3E', \$vstr);


\t\twhile(preg_match('/('.\$orrephs.') ('.\$orpartialforms.')/', \$vstr)) {
\t\t\t\$vstr = preg_replace('/('.\$orrephs.') ('.\$orpartialforms.')/', '\\\\2 \\\\1', \$vstr);
\t\t}
\t\t\$vstr = preg_replace('/('.\$orrephs.') ('.\$orfullforms.')/', '\\\\2 \\\\1', \$vstr);


\t\t// Combine Reph and MatraI
\t\t\$vstr = str_replace('E069 0B3F', 'E06D', \$vstr);\t// Reph and MatraI -> MatraIReph
\t\t\$vstr = str_replace('E06A 0B3F', 'E06E', \$vstr);\t// Reph and MatraI -> MatraIReph
\t\t\$vstr = str_replace('E06B 0B3F', 'E06F', \$vstr);\t// Reph and MatraI -> MatraIReph
\t}


\t// MALAYALAM Shift Reph to LEFT [E00E] (mlylmRaVattu)
\telse if (\$lang=='ml') {
\t\t\$halant = \"0D4D\";\t
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' 0D30/','E00E \\\\1', \$vstr);\t// 0D30 = Ra
\t\t\$vstr = preg_replace('/([A-F0-9]{4}) '.\$halant.' '.\$mlprebasedvowels .' 0D30/','\\\\2 E00E \\\\1', \$vstr);\t// 0D30 = Ra

\t\t\$mlfullforms = \"0D15|0D16|0D17|0D18|0D19|0D1A|0D1B|0D1C|0D1D|0D1E|0D1F|0D20|0D21|0D22|0D23|0D24|0D25|0D26|0D27|0D28|0D2A|0D2B|0D2C|0D2D|0D2E|0D2F|0D30|0D31|0D32|0D33|0D34|0D35|0D36|0D37|0D38|0D39\"
\t\t.\"|E010|E011|E012|E013|E014|E015|E016|E017|E018|E019|E01A|E01B|E01C|E01D|E01E|E01F|E020|E021|E022|E023|E024|E025|E026|E027|E028|E029|E02A|E02B|E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037|E038|E039|E03A|E03B|E03C|E03D|E03E|E03F|E040|E041|E042|E043|E044|E045|E046|E047|E048|E049|E04A|E04B|E04C|E04D|E04E|E04F|E050|E051|E052|E053|E054|E055|E056|E057|E058|E059|E05A|E05B|E05C|E05D|E05E|E05F|E060|E061|E062|E063|E064|E065|E066|E067|E068|E069|E06A|E06B|E06C|E06D|E06E|E06F|E070|E071|E072|E073|E074|E075|E076|E077|E078|E079|E07A|E07B|E07C|E07D\";
\t\t// = FullConsonants + FullConjuncts

\t\t// = Add Chillu characters\t// mPDF 5.0.024
\t\t\$mlfullforms .= \"|E004|E005|E006|E007|E008|E009\";
\t\twhile(preg_match('/('.\$mlfullforms.') E00E/', \$vstr))
\t\t\t\$vstr = preg_replace('/('.\$mlfullforms.') E00E/', 'E00E \\\\1', \$vstr);
\t}

\t//============================

\t// SHIFT post-based vowels to Left of SmallForms (NOT to left of full forms)

\t// TELUGU Shift 
\tif (\$lang=='te') {
\t\t// NB \$tevowels defined above
\t\t// NB \$tefullforms defined above
\t\t\$tebelowbase1 = \"E02C|E02D|E02E|E02F|E030|E031|E032|E033|E034|E035|E036|E037|E038|E039|E03A|E03B|E03C|E03D|E03E|E03F|E040|E041|E042|E043|E044|E045|E046|E047|E048|E049|E04A|E04B|E04C|E04D|E04E\";\t\t//'Small1KaToHa'
\t\t\$tebelowbase2 = \"E04F|E050|E051|E052|E053|E054|E055|E056|E057|E058|E059|E05A|E05B|E05C|E05D|E05E|E05F|E060|E061|E062|E063|E064|E065|E066|E067|E068|E069|E06A|E06B|E06C|E06D|E06E|E06F|E070|E071\";\t// 'Small2KaToHa'
\t\t\$vstr = preg_replace('/('.\$tebelowbase2.') ('.\$tevowels.')/', '\\\\2 \\\\1', \$vstr);
\t\t\$vstr = preg_replace('/('.\$tebelowbase1.') ('.\$tevowels.')/', '\\\\2 \\\\1', \$vstr);
\t}


\t// KANNADA Shift 
\telse if (\$lang=='kn') {
\t\t\$knvowels = \"0CBE|0CC0|0CC1|0CC2|0CC3|0CC4|0CC7|0CC8|0CCA|0CCB|0CD5|0CD6\"
\t// mPDF 5.3.87  Shouldn't swop E082 and E047 (belowbase1) below
\t// E082 is a matraIligature
\t//\t.\"|E082|E083|E084|E085|E086|E087|E088|E089|E08A|E08B|E08C|E08D|E08E|E08F|E090|E091|E092|E093|E094|E095|E096|E097|E098|E099|E09A|E09B|E09C|E09D|E09E|E09F|E0A0|E0A1|E0A2|E0A3|E0A4|E0A5|E0A6|E0A7|E0A8|E0A9|E0AA|E0AB\"
\t\t.\"|E004|E007|E008|E009|E00A\";


\t\t// NB \$knvowels defined above
\t\t// NB \$fullforms defined above
\t\t// \$belowbase1/2 defined above
\t\t\$vstr = preg_replace('/('.\$belowbase2.') ('.\$knvowels.')/', '\\\\2 \\\\1', \$vstr);
\t\t// mPDF 5.3.87
\t\t\$vstr = preg_replace('/('.\$belowbase1.') ('.\$knvowels.')/', '\\\\2 \\\\1', \$vstr);

\t\t//\$vstr = preg_replace('/('.\$fullforms.') ('.\$knvowels.')/', '\\\\2 \\\\1', \$vstr);
\t}

\t//============================
\t// Clear unwanted ZWJ, ZWNJ
\t// MALAYALAM
\tif (\$lang=='ml') {\t
\t\t\$vstr = preg_replace('/(200C|200D) /','', \$vstr);
\t}

\t//============================
\t// END & PUT IT BACK TOGETHER
\t\$vstr = preg_replace('/^0020 (.*) 0020\$/', '\\\\1', \$vstr);

\t\$varr = explode(\" \",\$vstr);
\t\$e = '';
\tforeach(\$varr AS \$v) {
\t\t\$e.=code2utf(hexdec(\$v));
\t}
\t//============================

\treturn \$e;
}


}

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/indic.php";
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
        return new Twig_Source("", "support/include/mpdf/classes/indic.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\classes\\indic.php");
    }
}
