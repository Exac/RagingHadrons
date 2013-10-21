<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/css/main.css">
<title>Raging Hadrons</title>
</head>

<body>

<h1>Testing display of HTML elements</h1>
<h2>This is 2nd level heading</h2>
<p>This is a test paragraph.</p>
<h3>This is 3rd level heading</h3>
<p>This is a test paragraph.</p>
<h4>This is 4th level heading</h4>
<p>This is a test paragraph.</p>
<h5>This is 5th level heading</h5>
<p>This is a test paragraph.</p>
<h6>This is 6th level heading</h6>
<p>This is a test paragraph.</p>
<h2>Basic block level elements</h2>
<p>This is a normal paragraph (p element).  To add some length to it, let us mention that this page was  primarily written for testing the effect of <strong>user style sheets</strong>.  You can use it for various other purposes as well, like just checking how  your browser displays various HTML elements by default.  It can also be useful when testing conversions from HTML  format to other formats, since some elements can go wrong then.</p>
<p>This is another paragraph. I think it needs to be added that  the set of elements tested is not exhaustive in any sense. I have selected  those elements for which it can make sense to write user style sheet rules,  in my opionion.</p>
<div>This is a div element. Authors may use such elements instead  of paragraph markup for various reasons. (End of div.)</div>
<blockquote>
  <p>This is a block quotation containing a single  paragraph. Well, not quite, since this is not <em>really</em> quoted text, but I hope you understand the point. After all, this  page does not use HTML markup very normally anyway.</p>
</blockquote>
<p>The following contains address information about the author, in an address  element.</p>
<address>
<a href="http://www.cs.tut.fi/%7Ejkorpela/personal.html" hreflang="en" lang="fi" xml:lang="fi">Jukka Korpela</a>, <a href="mailto:jkorpela@cs.tut.fi">jkorpela@cs.tut.fi</a><br />
Päivänsäteenkuja 4 A, Espoo, Finland
</address>
<h2>Lists</h2>
<p>This is a paragraph before an <strong>unnumbered</strong> list (ul). Note that  the spacing between a paragraph and a list before or after that is hard  to tune in a user style sheet. You can't guess which paragraphs are  logically related to a list, e.g. as a &quot;list header&quot;.</p>
<ul>
  <li> One. </li>
  <li> Two. </li>
  <li> Three. Well, probably this list item should be longer. Note that  for short items lists look better if they are compactly presented,         whereas for long items, it would be better to have more vertical spacing between items. </li>
  <li> Four. This is the last item in this list.         Let us terminate the list now without making any more fuss about it. </li>
</ul>
<p>The following is a menu list:</p>
<menu>
  <li> One. </li>
  <li> Two. </li>
  <li> Three. Well, probably this list item should be longer so that it will  probably wrap to the next line in rendering. </li>
</menu>
<p>The following is a dir list:</p>
<dir>
<li> One. </li>
<li> Two. </li>
<li> Three. Well, probably this list item should be longer so that it will  probably wrap to the next line in rendering. </li>
</dir>
<p>This is a paragraph before a <strong>numbered</strong> list (ol). Note that  the spacing between a paragraph and a list before or after that is hard  to tune in a user style sheet. You can't guess which paragraphs are  logically related to a list, e.g. as a &quot;list header&quot;.</p>
<ol>
  <li> One. </li>
  <li> Two. </li>
  <li> Three. Well, probably this list item should be longer. Note that if  items are short, lists look better if they are compactly presented,         whereas for long items, it would be better to have more vertical spacing between items. </li>
  <li> Four. This is the last item in this list.         Let us terminate the list now without making any more fuss about it. </li>
</ol>
<p>This is a paragraph before a <strong>definition</strong> list (dl).  In principle, such a list should consist of <em>terms</em> and associated   definitions.  But many authors use dl elements for fancy &quot;layout&quot; things. Usually the  effect is not <em>too</em> bad, if you design user style sheet rules for dl  which are suitable  for real definition lists. </p>
<dl>
  <dt> recursion </dt>
  <dd> see recursion </dd>
  <dt> recursion, indirect </dt>
  <dd> see indirect recursion </dd>
  <dt> indirect recursion </dt>
  <dd> see recursion, indirect </dd>
  <dt> term </dt>
  <dd> a word or other expression taken into specific use in         a well-defined meaning, which is often defined rather rigorously, even         formally, and may differ quite a lot from an everyday meaning </dd>
</dl>
<h2>Text-level markup</h2>
<ul>
  <li> <abbr title="Cascading Style Sheets">CSS</abbr> (an abbreviation;   abbr markup used) </li>
  <li> <acronym title="radio detecting and ranging">radar</acronym> (an acronym; acronym markup used) </li>
  <li> <strong>bolded</strong> (b markup used - just bolding with unspecified         semantics) </li>
  <li> big thing (big markup used) </li>
  <li> large size (font size=6 markup used) </li>
  <li> Courier font (font face=Courier markup used) </li>
  <li> red text (font color=red markup used) </li>
  <li> Origin of Species (a book title;         cite markup used) </li>
  <li> a[i] = b[i] + c[i); (computer code; code markup used) </li>
  <li> here we have some deleted text (del markup used) </li>
  <li> an octet is an entity consisting of eight bits         (dfn markup used for the term being defined) </li>
  <li> this is <em>very</em> simple (em markup used for emphasizing         a word) </li>
  <li> <em lang="la" xml:lang="la">Homo sapiens</em> (should appear in italics;  i markup used) </li>
  <li> here we have some inserted text (ins markup used) </li>
  <li> type yes when prompted for an answer (kbd markup         used for text indicating keyboard input) </li>
  <li> Hello! (q markup used for quotation) </li>
  <li> He said: She said Hello! (a quotation inside a quotation) </li>
  <li> you may get the message Core dumped at times         (samp markup used for sample output) </li>
  <li> this is not that important (small markup used) </li>
  <li> overstruck (strike markup used; note:         s is a nonstandard synonym for strike) </li>
  <li> <strong>this is highlighted text</strong> (strong         markup used) </li>
  <li> In order to test how subscripts and superscripts (sub and         sup markup) work inside running text, we need some         dummy text around constructs like x1 and H2O         (where subscripts occur). So here is some fill so that         you will (hopefully) see whether and how badly the subscripts         and superscripts mess up vertical spacing between lines.         Now superscripts: Mlle, 1st, and then some         mathematical notations: ex, sin2 <em>x</em>,         and some nested superscripts (exponents) too:         ex2 and f(x)g(x)a+b+c         (where 2 and a+b+c should appear as exponents of exponents). </li>
  <li> text in monospace font (tt markup used) </li>
  <li> <u>underlined</u> text (u markup used) </li>
  <li> the command cat filename displays the         file specified by the filename (var markup         used to indicate a word as a variable). </li>
</ul>
<p>Some of the elements tested above are typically displayed in a monospace  font, often using the <em>same</em> presentation for all of them. This  tests whether that is the case on your browser:</p>
<ul>
  <li> This is sample text inside code markup </li>
  <li> This is sample text inside kbd markup </li>
  <li> This is sample text inside samp markup </li>
  <li> This is sample text inside tt markup </li>
</ul>
<h2>Links</h2>
<ul>
  <li> <a href="http://www.cs.tut.fi/%7Ejkorpela/index.html">main page</a></li>
  <li> <a href="http://www.unicode.org/versions/Unicode4.0.0/ch06.pdf" title="Writing Systems and Punctuation" type="application/pdf">Unicode Standard, chapter 6</a></li>
</ul>
<p>This is a text paragraph that contains some  inline links. Generally, inline links (as opposite to e.g. links  lists) are problematic  from the <a href="http://www.useit.com">usability</a> perspective,  but they may have use as  &ldquo;incidental&rdquo;, less relevant links. See the document <a href="http://www.cs.tut.fi/%7Ejkorpela/www/links.html">Links Want To Be Links</a>.</p>
<h2>Forms</h2>
<form action="http://www.cs.tut.fi/cgi-bin/run/~jkorpela/echo.cgi">
  <div> This is a form containing various fields (with some initial  values (defaults) set, so that you can see how input text looks  like without actually typing it):</div>
  <div>
    <label for="but">Button: </label>
  </div>
  <div>
    <label for="f0">Reset button: </label>
  </div>
  <div>
    <label for="f1">Single-line text input field:
      <input id="f1" name="text" size="20" value="Default text." />
    </label>
  </div>
  <div>
    <label for="f2">Multi-line text input field (textarea):</label>
    <br />
    <textarea id="f2" name="textarea" rows="2" cols="20">Default text.  </textarea>
  </div>
  <div>The following two radio buttons are inside  a fieldset element with a legend:</div>
  <fieldset>
    <legend>Legend</legend>
    <div>
      <label for="f3">
        <input id="f3" name="radio" value="1" type="radio" />
        Radio button 1</label>
    </div>
    <div>
      <label for="f4">
        <input id="f4" name="radio" value="2" checked="checked" type="radio" />
        Radio button 2 (initially checked)</label>
    </div>
  </fieldset>
  <fieldset>
    <legend>Check those that apply</legend>
    <div>
      <label for="f5">
        <input id="f5" name="checkbox" type="checkbox" />
        Checkbox 1</label>
    </div>
    <div>
      <label for="f6">
        <input id="f6" name="checkbox2" checked="checked" type="checkbox" />
        Checkbox 2 (initially checked)</label>
    </div>
  </fieldset>
  <div>
    <label for="f10">A select element with size=&quot;1&quot;  (dropdown box): </label>
  </div>
  <div>
    <label for="f11">A select element with size=&quot;3&quot;  (listbox):</label>
    <br />
  </div>
  <div>
    <label for="f99">Submit button: </label>
  </div>
</form>
<h2>Tables</h2>
<p>The following table has a caption. The first row and the first column  contain table header cells (th elements) only; other cells  are data cells (td elements), with align=&quot;right&quot;  attributes:</p>
<table summary="Each row names a Nordic country and specifies its total area and land area, in square kilometers">
  <caption>
    Sample table: Areas of the Nordic countries, in sq km
  </caption>
  <tbody>
    <tr>
      <th scope="col">Country</th>
      <th scope="col">Total area</th>
      <th scope="col">Land area</th>
    </tr>
    <tr>
      <th scope="row">Denmark</th>
      <td align="right"> 43,070 </td>
      <td align="right"> 42,370</td>
    </tr>
    <tr>
      <th scope="row">Finland</th>
      <td align="right">337,030 </td>
      <td align="right">305,470</td>
    </tr>
    <tr>
      <th scope="row">Iceland</th>
      <td align="right">103,000 </td>
      <td align="right">100,250</td>
    </tr>
    <tr>
      <th scope="row">Norway</th>
      <td align="right">324,220 </td>
      <td align="right">307,860</td>
    </tr>
    <tr>
      <th scope="row">Sweden</th>
      <td align="right">449,964 </td>
      <td align="right">410,928</td>
    </tr>
  </tbody>
</table>
<h2>Character test</h2>
<p>The following table has some sample characters with  annotations. If the browser&rsquo;s default font does not  contain all of them, they may get displayed using backup fonts.  This may cause stylistic differences, but it should not  prevent the characters from being displayed at all.</p>
<table>
  <tbody>
    <tr>
      <th>Char. </th>
      <th>Explanation </th>
      <th>Notes </th>
    </tr>
    <tr>
      <td>ê </td>
      <td>e with circumflex </td>
      <td>Latin 1 character, should be ok </td>
    </tr>
    <tr>
      <td>— </td>
      <td>em dash </td>
      <td>Windows Latin 1 character, should be ok, too </td>
    </tr>
    <tr>
      <td>Ā </td>
      <td>A with macron (line above) </td>
      <td>Latin Extended-A character, not present in all fonts </td>
    </tr>
    <tr>
      <td>Ω </td>
      <td>capital omega </td>
      <td>A Greek letter </td>
    </tr>
    <tr>
      <td>− </td>
      <td>minus sign </td>
      <td>Unicode minus </td>
    </tr>
    <tr>
      <td>⌀ </td>
      <td>diameter sign </td>
      <td>relatively rare in fonts </td>
    </tr>
  </tbody>
</table>
<h2>Hyphenation</h2>
<p>In the following, a width setting should cause some hyphenation,  depending on support to various methods of hyphenation.</p>
<h3>CSS-based hyphenation</h3>
<p>Until recently the great majority of   naturalists believed that species were immutable productions, and had   been separately created. This view has been ably maintained by many   authors. </p>
<h3>JavaScript-driven hyphenation</h3>
<p>Until re­cently the great ma­jor­ity of   nat­u­ral­ists be­lieved that species were im­mutable pro­duc­tions, and   had been sep­a­rately cre­ated. This view has been ably main­tained by   many au­thors. </p>
<h3>Explicit hyphenation hints (soft hyphens)</h3>
<p>Un­til re­cent­ly the great   ma­jor­i­ty of nat­u­ral­ists  be­lieved that spe­cies were   im­mu­ta­ble   pro­duc­tions,   and had been sep­a­rate­ly cre­at­ed.  This view has been ably main­tain­ed by many au­thors. </p>
</body>
</html>