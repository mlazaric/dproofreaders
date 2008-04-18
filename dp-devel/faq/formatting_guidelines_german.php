<?
$relPath='../pinc/';
include($relPath.'site_vars.php');
include($relPath.'faq.inc');
include($relPath.'pg.inc');
include($relPath.'connect.inc');
include($relPath.'theme.inc');
new dbConnect();
$no_stats=1;
theme('Formatierungsrichtlinien','header');

$utf8_site=!strcasecmp($charset,"UTF-8");
?>

<!-- NOTE TO MAINTAINERS AND DEVELOPERS:

     There are now HTML comments interspersed in this document which are/will be
     used by a script which automagically slices out the Random Rule text for the
     database. It does this by copying:
       1) All text from one h_3 to the next h_3
          -OR-
       2) All text from h_3 to the END_RR comment line.

    This allows us to have "extra" information in the Guidelines, but leave it out
    in the Random Rule for purposes of clarity/brevity.

    If you are updating this document, the above should be kept in mind.
-->

<h1 align="center">Formatierungsrichtlinien</h1>

<h3 align="center">Version 1.9.e vom 19. Juli 2007 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="dochist.php"><font size="-1">(&Uuml;berarbeitungsverlauf)</font></a></h3>

<h4>Formatierungsrichtlinien <a href="document.php">auf Englisch</a> /
      Formatting Guidelines <a href="formatting_guidelines.php">in English</a> <br />
    Formatierungsrichtlinien <a href="formatting_guidelines_francaises.php">auf Franz&ouml;sisch</a> /
      Directives de Formatage <a href="formatting_guidelines_francaises.php">en fran&ccedil;ais</a><br />
    Formatierungsrichtlinien <a href="formatting_guidelines_portuguese.php">auf Portugiesisch</a> /
      Regras de Formata&ccedil;&atilde;o <a href="formatting_guidelines_portuguese.php">em Portugu&ecirc;s</a><br />
    Formatierungsrichtlinien <a href="formatting_guidelines_dutch.php">auf Niederl&auml;ndisch</a> /
      Formateer-Richtlijnen <a href="formatting_guidelines_dutch.php">in het Nederlands</a><br />
</h4>

<h4>Hier geht es zum <a href="../quiz/start.php?show_only=FQ">Formatting Quiz</a> (nur Englisch).</h4>

<table border="0" cellspacing="0" width="100%" summary="Formatting Guidelines">
  <tbody>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="silver" align="center"><font size="+2"><b>Inhaltsverzeichnis</b></font></td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="white" align="left">
    <ul>
      <li><a href="#prime">Oberstes Gebot</a></li>
      <li><a href="#summary">Kurzfassung dieser Richtlinien</a></li>
      <li><a href="#about">&Uuml;ber dieses Dokument</a></li>
      <li><a href="#comments">Projektkommentare</a></li>
      <li><a href="#forums">Forum/Diskussion eines Projektes</a></li>
      <li><a href="#prev_pg">Fehler auf fr&uuml;heren Seiten beheben</a></li>
    </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="silver" align="left">
      <ul>
        <li><font size="+1">Formatieren: Richtlinien f&uuml;r ...</font></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="white" align="left">
      <ul style="margin-left: 3em;">
        <li><a href="#title_pg">Vorder- und R&uuml;ckseiten von Titelbl&auml;ttern</a></li>
        <li><a href="#toc">Inhaltsverzeichnisse</a></li>
        <li><a href="#blank_pg">Leere Seiten</a></li>
        <li><a href="#page_hf">Kopf- und Fu&szlig;zeilen</a></li>
        <li><a href="#chap_head">Kapitel&uuml;berschriften</a></li>
        <li><a href="#sect_head">Abschnitts&uuml;berschriften</a></li>
        <li><a href="#maj_div">Weitere Hauptbestandteile eines Buches</a></li>
        <li><a href="#para_side">Randnoten (Marginalien)</a></li>
        <li><a href="#para_space">Absatzabst&auml;nde und -einr&uuml;ckungen</a></li>
        <li><a href="#mult_col">Mehrspaltige Texte</a></li>
        <li><a href="#illust">Abbildungen</a></li>
        <li><a href="#footnotes">Fu&szlig;noten/Endnoten</a></li>
        <li><a href="#italics">Kursiver Text</a></li>
        <li><a href="#bold">Fett gedruckter Text</a></li>
        <li><a href="#supers">Hochgestellte Zeichen</a></li>
        <li><a href="#subscr">Tiefgestellte Zeichen</a></li>
        <li><a href="#underl">Unterstrichener Text</a></li>
        <li><a href="#spaced">G e s p e r r t e r &nbsp; Text</a></li>
        <li><a href="#font_ch">&Auml;nderungen der Schriftart</a></li>
        <li><a href="#font_sz">Unterschiedliche Schriftgr&ouml;&szlig;en</a></li>
        <li><a href="#word_caps">W&ouml;rter in Gro&szlig;buchstaben</a></li>
        <li><a href="#small_caps">W&ouml;rter in <span style="font-variant: small-caps">Kapit&auml;lchen</span></a></li>
        <li><a href="#drop_caps">&Uuml;berdimensionale, verzierte Gro&szlig;buchstaben
            als Er&ouml;ffnung (Initialen)</a></li>
        <li><a href="#em_dashes">Bindestriche, kurze und lange Gedankenstriche</a></li>
        <li><a href="#eol_hyphen">Trennstriche am Zeilenende</a></li>
        <li><a href="#eop_hyphen">Trennstriche am Seitenende</a></li>
        <li><a href="#next_word">Einzelne W&ouml;rter am unteren Seitenrand</a></li>
        <li><a href="#contract">Zusammenziehungen</a></li>
        <li><a href="#poetry">Gedichte/Epigramme</a></li>
        <li><a href="#letter">Briefe/Korrespondenz</a></li>
        <li><a href="#lists">Aufz&auml;hlungen</a></li>
        <li><a href="#tables">Tabellen</a></li>
        <li><a href="#block_qt">Blockzitate</a></li>
        <li><a href="#double_q">Doppelte Anf&uuml;hrungszeichen</a></li>
        <li><a href="#single_q">Einfache Anf&uuml;hrungszeichen</a></li>
        <li><a href="#quote_ea">Anf&uuml;hrungszeichen auf jeder Zeile</a></li>
        <li><a href="#period_s">Punkte am Ende von S&auml;tzen</a></li>
        <li><a href="#punctuat">Satzzeichen</a></li>
        <li><a href="#line_br">Zeilenumbr&uuml;che</a></li>
        <li><a href="#extra_sp">&Uuml;berfl&uuml;ssige Leerzeichen bzw. Tabulatoren
            zwischen W&ouml;rtern</a></li>
        <li><a href="#trail_s">Leerzeichen am Zeilenende</a></li>
        <li><a href="#line_no">Zeilennummern</a></li>
        <li><a href="#extra_s">Zus&auml;tzliche(r) Abstand/Sternchen/Zeilen
            zwischen Abs&auml;tzen</a></li>
        <li><a href="#period_p">Auslassungspunkte &bdquo;...&ldquo; (Ellipse)</a></li>
        <li><a href="#a_chars">Akzente und nicht-ASCII-Zeichen</a></li>
        <li><a href="#d_chars">Buchstaben mit diakritischen Zeichen</a></li>
        <li><a href="#f_chars">Nicht-lateinische Zeichen</a></li>
        <li><a href="#fract_s">Br&uuml;che</a></li>
        <li><a href="#page_ref">Seitenverweise (&bdquo;siehe S. 123&ldquo;)</a></li>
        <li><a href="#bk_index">Sachregister und Schlagwortverzeichnisse</a></li>
        <li><a href="#play_n">Dramen: Rollennamen/Regieanweisungen</a></li>
        <li><a href="#anything">Sonstige Besonderheiten und Behandlung von Unklarheiten</a></li>
        <li><a href="#prev_notes">Anmerkungen vorhergehender Korrekturleser</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="silver" align="left">
    <ul>
      <li><font size="+1">Sonderrichtlinien f&uuml;r spezielle B&uuml;cher</font></li>
    </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="white" align="left">
      <ul style="margin-left: 3em;">
        <li><a href="#sp_ency">Enzyklop&auml;dien</a></li>
        <li><a href="#sp_poet">Gedichtb&auml;nde</a></li>
        <li><a href="#sp_chem">Chemieb&uuml;cher</a> [wird erg&auml;nzt]</li>
        <li><a href="#sp_math">Mathematikb&uuml;cher</a> [wird erg&auml;nzt]</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="silver" align="left">
    <ul>
      <li><font size="+1">Allgemeine Probleme</font></li>
    </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="white" align="left">
      <ul style="margin-left: 3em;">
        <li><a href="#OCR_1lI">OCR-Fehler: 1-l-I</a></li>
        <li><a href="#OCR_0O">OCR-Fehler: 0-O</a></li>
        <li><a href="#OCR_hyphen">OCR-Fehler: Binde- und Gedankenstriche</a></li>
        <li><a href="#OCR_scanno">OCR-Fehler: &bdquo;Scannos&ldquo;</a></li>
        <li><a href="#hand_notes">Handgeschriebene Notizen in B&uuml;chern</a></li>
        <li><a href="#bad_image">Schlechte Vorlagen</a></li>
        <li><a href="#bad_text">Falsche Vorlage zum Text</a></li>
        <li><a href="#round1">Fehler der vorherigen Korrekturleser bzw. Formatierer</a></li>
        <li><a href="#p_errors">Satz- und Rechtschreibfehler: &bdquo;Typos&ldquo;</a></li>
        <li><a href="#f_errors">Tatsachenfehler im Text</a></li>
        <li><a href="#uncertain">Unklare Punkte</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td width="1" bgcolor="silver">&nbsp;</td>
    <td bgcolor="silver">&nbsp;</td>
  </tr>
 </tbody>
</table>

<h3><a name="prime">Oberstes Gebot</a></h3>
<p><em>&bdquo;Lassen Sie den Text des Autors unver&auml;ndert!&ldquo;</em>
</p>
<p>Das fertige E-Book, das der Leser vielleicht in Jahrzehnten erst zu Gesicht
   bekommt, soll die Absicht des Autors genau vermitteln. Hat der Autor W&ouml;rter
   ungew&ouml;hnlich buchstabiert, so belassen wir sie in dieser Schreibweise.
   Hat der Autor ungeheuerlich rassistische oder voreingenommene Aussagen gemacht,
   so lassen wir sie so stehen. Hat der Autor jedes dritte Wort kursiv bzw. fett
   geschrieben oder &uuml;berall Fu&szlig;noten angeh&auml;ngt, markieren wir sie
   als kursiv bzw. fett oder als Fu&szlig;noten. (Siehe <a href="#p_errors">Satz-
   und Rechtschreibfehler</a> zur richtigen Behandlung von offensichtlichen Druckfehlern.)
</p>
<p>Allerdings &auml;ndern wir weniger bedeutsame typographische Konventionen,
   die den Sinn des Textes nicht beeinflussen. Zum Beispiel verbinden wir Worte,
   die an einem Zeilenumbruch getrennt wurden (<a href="#eol_hyphen">Trennstriche
   am Zeilenende</a>). Solche &Auml;nderungen erm&ouml;glichen die Erstellung einer
   <em>konsistent formatierten</em> Version des Buches. Unsere Regeln sind darauf
   ausgelegt, dieses Ziel zu erreichen. Bitte lesen Sie die &uuml;brigen Richtlinien
   sorgf&auml;ltig unter diesem Gesichtspunkt.
</p>
<p>Um es dem nachfolgenden Formatierer und Nachbearbeiter leichter zu machen,
   behalten wir dar&uuml;ber hinaus <a href="#line_br">Zeilenumbr&uuml;che</a>
   bei. Dadurch lassen sich die Zeilen im Text leichter mit den Zeilen in der Vorlage
   vergleichen.
</p>
<!-- END RR -->

<table width="100%" border="0" cellspacing="0" summary="Summary Guidelines">
  <tbody>
    <tr>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
  </tbody>
</table>

<h3><a name="summary">Kurzfassung dieser Richtlinien</a></h3>
<p>Die Kurzfassung dieser Richtlinien ist ein &uuml;bersichtliches, zweiseitiges
   druckerfreundliches PDF-Dokument, das die wichtigsten Punkte enth&auml;lt und
   Beispiele f&uuml;rs Formatieren gibt. Sie ist derzeit nur in englischer Sprache
   verf&uuml;gbar (<a href="formatting_summary.pdf">Formatting Summary</a>), aber
   eine deutsche Fassung ist in Arbeit. Falls Sie neu hier sind, empfehlen wir
   Ihnen, das PDF-Dokument auszudrucken und w&auml;hrend des Formatierens griffbereit
   zu halten.
</p>
<p>M&ouml;glicherweise m&uuml;ssen Sie erst eine Software zum Anzeigen von PDF-Dateien
   herunterladen und installieren. Eine kostenlose Version von Adobe&reg; finden
   Sie <a href="http://www.adobe.com/products/acrobat/readstep2.html">hier</a>.
</p>

<h3><a name="about">&Uuml;ber dieses Dokument</a></h3>
<p>Dieses Dokument enth&auml;lt Erkl&auml;rungen zu den Formatierregeln. Jedes
   Buch wird von vielen Formatierern verteilt bearbeitet, von denen jeder andere
   Seiten formatiert. Das Einhalten der Regeln hilft allen, die Formatierung konsistent,
   d.&nbsp;h. <em>auf die gleiche Art</em> durchzuf&uuml;hren. Das macht es dem
   Nachbearbeiter leichter, die einzelnen Seiten zu einem E-Book zusammenzuf&uuml;gen.
</p>
<p><i>Dieses Dokument ist nicht als allgemeines Regelwerk f&uuml;r Redaktionsarbeit
   oder Typographie gedacht.</i>
</p>
<p>Wir haben alle Punkte aufgegriffen, die neuen Formatierern und Korrekturlesern
   Schwierigkeiten bereitet haben. Falls Sie etwas vermissen, etwas Ihrer Ansicht
   nach anders beschrieben werden sollte oder unklar f&uuml;r Sie ist, so lassen
   Sie es uns bitte wissen.
</p>
<p>Diese Richtlinien werden laufend &uuml;berarbeitet. Helfen Sie uns dabei,
   indem Sie uns Ihre Verbesserungsvorschl&auml;ge im
   <a href="<? echo $Guideline_discussion_URL; ?>">Forum Dokumentation</a> mitteilen.
</p>

<h3><a name="comments">Projektkommentare</a></h3>
<p>Auf der Projektseite, dem Ausgangspunkt f&uuml;r das Formatieren, finden Sie
   einen Abschnitt &sbquo;Project Comments&lsquo; (Projektkommentare), der spezielle
   Informationen zu diesem Projekt (Buch) enth&auml;lt. <b>Lesen Sie die Projektkommentare,
   bevor Sie mit dem Formatieren beginnen!</b> Falls der Projektmanager m&ouml;chte,
   dass Sie in seinem Buch etwas anders formatieren als hier vorgeschrieben, so
   steht es dort. Anleitungen in den Projektkommentaren haben <em>Vorrang </em>
   vor den Regeln in diesen Richtlinien, also richten Sie sich danach. Au&szlig;erdem
   kann der Projektmanager dort interessante Informationen &uuml;ber den Autor
   oder das Projekt einstellen.
</p>
<p><em>Bitte lesen Sie auch das Projektforum!</em> Dort kann der Projektmanager
   Fragen zu den projektspezifischen Richtlinien kl&auml;ren. Oft wird es auch
   von Formatierern verwendet, um andere auf wiederkehrende Schwierigkeiten im
   Projekt hinzuweisen und darauf, wie sie am besten angegangen werden. (Siehe
   unten).
</p>
<p>&Uuml;ber den Link &sbquo;Images, Pages Proofread, &amp; Differences&lsquo;
   (Vorlagen, korrigierte Seiten &amp; &Auml;nderungen) auf der Projektseite
   kann man sehen, was andere Freiwillige ge&auml;ndert haben.
   <a href="<? echo $Using_project_details_URL ?>">Dieses Forum</a>
   er&ouml;rtert verschiedene Arten, diese Informationen zu benutzen.
</p>

<h3><a name="forums">Forum/Diskussion eines Projektes</a></h3>
<p>Auf der Projektseite, dem Ausgangspunkt f&uuml;r das Formatieren, gibt es in
   der Zeile &sbquo;Forum&lsquo; den Link &sbquo;Discuss this Project&lsquo; (Projekt
   diskutieren), wenn es bereits eine Diskussion gibt oder &sbquo;Start a discussion
   on this Project&lsquo; (Diskussion zu diesem Projekt beginnen), wenn es noch
   keine gibt. Damit kommen Sie in einen Thread des Diskussionsforums speziell
   f&uuml;r dieses Projekt. Hier k&ouml;nnen Sie Fragen zum Projekt stellen, den
   Projektmanager &uuml;ber Probleme informieren usw. Benutzen Sie diesen Forum-Thread,
   um mit dem Projektmanager und anderen Formatierern zu kommunizieren, die ebenfalls
   an diesem Buch arbeiten.
</p>

<h3><a name="prev_pg">Fehler auf fr&uuml;heren Seiten beheben</a></h3>
<p>Wenn Sie ein Projekt zum Formatieren ausw&auml;hlen, wird die
   <a href="#comments">Projektseite</a> geladen. Diese Seite enth&auml;lt
   Links zu den Buchseiten, die Sie zuletzt bearbeitet haben. (Wenn Sie in
   einem Projekt noch keine Seiten formatiert haben, fehlen diese Links.)
</p>
<p>Seiten, die unter &sbquo;DONE&lsquo; (fertig; gr&uuml;n) gelistet sind, sind
   zum &Uuml;berarbeiten verf&uuml;gbar; &sbquo;IN PROGRESS&lsquo; (in Arbeit;
   orange) bedeutet, dass die Arbeit noch nicht abgeschlossen ist. Wenn Sie also
   entdecken, dass Sie auf einer Seite einen Fehler gemacht oder etwas falsch markiert
   haben, k&ouml;nnen Sie auf die entsprechende Seite klicken und sie erneut &ouml;ffnen,
   um den Fehler zu beheben.
</p>
<p>Au&szlig;erdem k&ouml;nnen Sie die Links &sbquo;Images, Pages Proofread, &amp;
   Differences&lsquo; (Vorlagen, korrigierte Seiten &amp; &Auml;nderungen) sowie
   &sbquo;Just My Pages&lsquo; (nur meine Seiten) auf der <a href="#comments">Projektseite</a>
   verwenden. Sie finden &sbquo;Edit&lsquo; (Bearbeiten)-Links neben allen Seiten,
   die Sie in dieser Runde bearbeitet haben und die noch &uuml;berarbeitet werden
   k&ouml;nnen.
</p>
<p>Weitere Informationen finden Sie entweder in der
   <a href="prooffacehelp.php?i_type=0">Hilfe zur
   Standard-Korrekturlese-Oberfl&auml;che</a> (nur Englisch) oder in der
   <a href="prooffacehelp.php?i_type=1">Hilfe zur Erweiterten
   Korrekturlese-Oberfl&auml;che</a> (nur Englisch), je nachdem, welche
   Benutzeroberfl&auml;che Sie verwenden.
</p>
<!-- END RR -->
<table width="100%" border="0" cellspacing="0" cellpadding="6" summary="Title Page">
  <tbody>
    <tr>
      <td bgcolor="silver"><font size="+2">Formatieren: Richtlinien f&uuml;r ...</font></td>
    </tr>
  </tbody>
</table>


<h3><a name="title_pg">Vorder- und R&uuml;ckseiten von Titelbl&auml;ttern</a></h3>
<p>Formatieren Sie den gesamten Text so, wie er auf der Seite gedruckt ist, einerlei
   ob nur Gro&szlig;buchstaben, Gro&szlig;- und Kleinschreibung o.&nbsp;&auml;.,
   einschlie&szlig;lich Publikationsjahr und Copyright-Angaben.
</p>
<p>In &auml;lteren B&uuml;chern ist der erste Buchstabe oft eine gro&szlig;e,
   verzierte Grafik &ndash; formatieren Sie ihn einfach als den dargestellten Buchstaben.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Title Page Example">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top"><img src="title.png" width="500"
          height="520" alt="Vorlage Titelblatt"><br>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
      <p><tt>GREEN FANCY</tt>
      </p>
      <p><tt>BY</tt></p>
      <p><tt>GEORGE BARR McCUTCHEON</tt></p>
      <p><tt>AUTHOR OF "GRAUSTARK," "THE HOLLOW OF HER HAND,"<br>
         "THE PRINCE OF GRAUSTARK," ETC.</tt></p>
      <p><tt>&lt;i&gt;WITH FRONTISPIECE BY&lt;/i&gt;<br>
         &lt;i&gt;C. ALLAN GILBERT&lt;/i&gt;</tt></p>
      <p><tt>NEW YORK<br>
         DODD, MEAD AND COMPANY<br>
         1917</tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="toc">Inhaltsverzeichnisse</a></h3>
<p>Formatieren Sie das Inhaltsverzeichnis so, wie es im Buch abgedruckt ist, einerlei
   ob in Gro&szlig;buchstaben, in Gro&szlig;- und Kleinschreibung und schlie&szlig;en
   Sie es in <tt>/*</tt> und <tt>*/</tt> ein. Lassen Sie eine Leerzeile zwischen
   diesen Markierungen und dem Rest des Textes. Seitenzahlen sollen erhalten bleiben
   und mit mindestes sechs Leerzeichen vom Rest der Zeile abgesetzt werden.
</p>
<p>Entfernen Sie eventuelle Punkte oder Sternchen (F&uuml;hrungszeichen), die
   zum Ausrichten der Seitenzahlen benutzt wurden.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="TOC">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top">
      <p><img src="tablec.png" alt="" width="500" height="650"></p>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
      <p><tt><br><br><br><br>CONTENTS<br><br></tt></p>
      <p><tt>/*<br>
          CHAPTER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAGE<br>
          <br>
          I. &lt;sc&gt;The First Wayfarer and the Second Wayfarer<br>
          Meet and Part on the Highway&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1<br>
          <br>
          II. &lt;sc&gt;The First Wayfarer Lays His Pack Aside and<br>
          Falls in with Friends&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15<br>
          <br>
          III. &lt;sc&gt;Mr. Rushcroft Dissolves, Mr. Jones Intervenes,<br>
          and Two Men Ride Away&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;33<br>
          <br>
          IV. &lt;sc&gt;An Extraordinary Chambermaid, a Midnight<br>
          Tragedy, and a Man Who Said "Thank You"&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50<br>
          <br>
          V. &lt;sc&gt;The Farm-boy Tells a Ghastly Story, and an<br>
          Irishman Enters&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;67<br>
          <br>
          VI. &lt;sc&gt;Charity Begins Far from Home, and a Stroll in<br>
          the Wildwood Follows&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;85<br>
          <br>
          VII. &lt;sc&gt;Spun-gold Hair, Blue Eyes, and Various Encounters&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;103<br>
          <br>
          VIII. &lt;sc&gt;A Note, Some Fancies, and an Expedition in<br>
          Quest of Facts&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;120<br>
          <br>
          IX. &lt;sc&gt;The First Wayfarer, the Second Wayfarer, and<br>
          the Spirit of Chivalry Ascendant&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;134<br>
          <br>
          X. &lt;sc&gt;The Prisoner of Green Fancy, and the Lament of<br>
          Peter the Chauffeur&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;148<br>
          <br>
          XI. &lt;sc&gt;Mr. Sprouse Abandons Literature at an Early<br>
          Hour in the Morning&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;167<br>
          <br>
          XII. &lt;sc&gt;The First Wayfarer Accepts an Invitation, and<br>
          Mr. Dillingford Belabors a Proxy&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;183<br>
          <br>
          XIII. &lt;sc&gt;The Second Wayfarer Receives Two Visitors at<br>
          Midnight&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;199<br>
          <br>
          XIV. &lt;sc&gt;A Flight, a Stone-cutter's Shed, and a Voice<br>
          Outside&lt;/sc&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;221<br>
          */<br>
      </tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="blank_pg">Leere Seiten</a></h3>
<p>Formatieren Sie diese als <tt>[Blank Page]</tt>, wenn sowohl Text als auch
   Vorlage leer sind.
</p>
<p>Wenn im Formatierfenster Text erscheint, aber eine leere Seite als Vorlage,
   oder wenn eine Buchseite mit Text angezeigt wird, aber kein Text im Formatierfenster,
   dann halten Sie sich an die Anweisungen in den Abschnitten <a href="#bad_image">Schlechte
   Vorlagen</a> und <a href="#bad_text">Falsche Vorlage zum Text</a>.
</p>

<h3><a name="page_hf">Kopf- und Fu&szlig;zeilen</a></h3>
<p>L&ouml;schen Sie Kopf- und Fu&szlig;zeilen, aber <em>nicht</em>
   <a href="#footnotes">Fu&szlig;noten</a>.
</p>
<p>Kopfzeilen befinden sich normalerweise ganz oben auf der Seite in derselben
   H&ouml;he wie die Seitenzahl. Kopfzeilen k&ouml;nnen im ganzen Buch (oft der
   Buchtitel und der Name des Autors) oder f&uuml;r jedes Kapitel (oft die Kapitelnummer)
   identisch, aber auch auf jeder Seite unterschiedlich sein (mit dem Inhalt der
   einzelnen Seite). Entfernen Sie unterschiedslos alle, einschlie&szlig;lich der
   Seitenzahl.
</p>
<!-- END RR -->

<p>Im Gegensatz dazu beginnt die <a href="#chap_head">Kapitel&uuml;berschrift</a>
   weiter unten auf der Seite und hat keine Seitenzahl auf derselben Zeile Ein
   Beispiel hierf&uuml;r finden Sie im n&auml;chsten Abschnitt.
</p>
<br>
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Page Headers and Footers">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <td width="100%" valign="top">
      <img src="foot.png" alt="" width="500" height="850"><br>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
    <tt>/#<br>In the United States?[A] In a railroad? In a mining company?<br>
    In a bank? In a church? In a college?<br>
    <br>
    Write a list of all the corporations that you know or have<br>
    ever heard of, grouping them under the heads &lt;i&gt;public&lt;/i&gt; and &lt;i&gt;private&lt;/i&gt;.<br>
    <br>
    How could a pastor collect his salary if the church should<br>
    refuse to pay it?<br>
    <br>
    Could a bank buy a piece of ground "on speculation?" To<br>
    build its banking-house on? Could a county lend money if it<br>
    had a surplus? State the general powers of a corporation.<br>
    Some of the special powers of a bank. Of a city.<br>
    <br>
    A portion of a man's farm is taken for a highway, and he is<br>
    paid damages; to whom does said land belong? The road intersects<br>
    the farm, and crossing the road is a brook containing<br>
    trout, which have been put there and cared for by the farmer;<br>
    may a boy sit on the public bridge and catch trout from that<br>
    brook? If the road should be abandoned or lifted, to whom<br>
    would the use of the land go?<br>#/<br>
    <br>
    <br>
    <br>
    <br>
    CHAPTER XXXV.<br>
    <br>
    &lt;sc&gt;Commercial Paper.&lt;/sc&gt;<br>
    <br>
    <br>
    &lt;b&gt;Kinds and Uses.&lt;/b&gt;--If a man wishes to buy some commodity<br>
    from another but has not the money to pay for<br>
    it, he may secure what he wants by giving his written<br>
    promise to pay at some future time. This written<br>
    promise, or &lt;i&gt;note&lt;/i&gt;, the seller prefers to an oral promise<br>
    for several reasons, only two of which need be mentioned<br>
    here: first, because it is &lt;i&gt;prima facie&lt;/i&gt; evidence of<br>
    the debt; and, second, because it may be more easily<br>
    transferred or handed over to some one else.<br>
    <br>
    If J. M. Johnson, of Saint Paul, owes C. M. Jones,<br>
    of Chicago, a hundred dollars, and Nelson Blake, of<br>
    Chicago, owes J. M. Johnson a hundred dollars, it is<br>
    plain that the risk, expense, time and trouble of sending<br>
    the money to and from Chicago may be avoided,<br>
    <br>
    [Footnote A: The United States: "Its charter, the constitution. * * * Its flag the<br>
    symbol of its power; its seal, of its authority."--Dole.]
    </tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="chap_head">Kapitel&uuml;berschriften</a></h3>
<p>Formatieren Sie die Kapitel&uuml;berschriften so, wie sie im Text stehen.
</p>
<p>Eine Kapitel&uuml;berschrift steht normalerweise unterhalb der <a href="#page_hf">Kopfzeile</a>
   und hat keine Seitenzahl in derselben Zeile. Kapitel&uuml;berschriften sind
   h&auml;ufig in Gro&szlig;buchstaben gedruckt. Ist das der Fall, so behalten
   Sie die Gro&szlig;buchstaben bei. Kapitel&uuml;berschriften sind &uuml;blicherweise
   in einer anderen oder gr&ouml;&szlig;eren Schriftart gedruckt, die wie fett
   gedruckt oder gesperrt aussehen kann; wir markieren sie aber nicht als andere
   Schriftart, fett oder gesperrt. Sie sollten jedoch Markierungen f&uuml;r Kursivschrift
   oder Kapit&auml;lchen einbringen, falls diese in der &Uuml;berschrift vorkommen.
</p>
<p>F&uuml;gen Sie vier Leerzeilen vor &bdquo;KAPITEL XXX&ldquo; ein, auch wenn
   das Kapitel auf einer neuen Seite beginnt. Es gibt keine &bdquo;Seiten&ldquo;
   in einem E-Book, daher sind die Leerzeilen n&ouml;tig. Danach lassen Sie eine
   Leerzeile zwischen jedem zus&auml;tzlichen Bestandteil der Kapitel&uuml;berschrift,
   wie z.&nbsp;B. Kapitelbeschreibung, er&ouml;ffnendes Zitat usw., und lassen
   Sie zwei Leerzeilen vor dem Anfang des Textes des Kapitels stehen.
</p>
<p>In alten B&uuml;chern sind das erste oder die ersten zwei Worte jedes Kapitels
   oft in Gro&szlig;buchstaben oder Kapit&auml;lchen gedruckt; &auml;ndern Sie
   diese in Gro&szlig;- und Kleinbuchstaben (nur der erste Buchstabe gro&szlig;).
</p>
<p>Achten Sie am Beginn des ersten Absatzes besonders auf fehlende doppelte
   Anf&uuml;hrungszeichen, die von manchen Verlagen am Kapitelanfang weggelassen
   oder von der OCR wegen eines gro&szlig;en Initials im Original
   &bdquo;&uuml;bersehen&ldquo; wurden. Wenn der Absatz mit direkter Rede beginnt,
   f&uuml;gen Sie das doppelte Anf&uuml;hrungszeichen ein.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Chapters">
 <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <td width="100%" valign="top"> <img src="chap1.png" alt=""
          width="500" height="725"><br>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
    <tt>
    GREEN FANCY<br>
    <br>
    <br>
    <br>
    <br>
    CHAPTER I<br>
    <br>
    THE FIRST WAYFARER AND THE SECOND WAYFARER<br>
    MEET AND PART ON THE HIGHWAY<br>
    <br>
    <br>
    A solitary figure trudged along the narrow<br>
    road that wound its serpentinous way<br>
    through the dismal, forbidding depths of<br>
    the forest: a man who, though weary and footsore,<br>
    lagged not in his swift, resolute advance. Night<br>
    was coming on, and with it the no uncertain prospects<br>
    of storm. Through the foliage that overhung<br>
    the wretched road, his ever-lifting and apprehensive<br>
    eye caught sight of the thunder-black, low-lying<br>
    clouds that swept over the mountain and bore<br>
    down upon the green, whistling tops of the trees.<br>
    <br>
    At a cross-road below he had encountered a small<br>
    girl driving homeward the cows. She was afraid<br>
    of the big, strange man with the bundle on his back<br>
    and the stout walking stick in his hand: to her a<br>
    remarkable creature who wore "knee pants" and<br>
    stockings like a boy on Sunday, and hob-nail shoes,<br>
    and a funny coat with "pleats" and a belt, and a<br>
    green hat with a feather sticking up from the band.
    </tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="sect_head">Abschnitts&uuml;berschriften</a></h3>
<p>Einige Texte haben Abschnitte innerhalb der Kapitel. Formatieren Sie diese
   &Uuml;berschriften so, wie sie im Text erscheinen. Lassen Sie zwei Leerzeilen
   vor der &Uuml;berschrift und eine danach, es sei denn, der Projektmanager verlangt
   etwas anderes. Wenn Sie nicht sicher sind, ob eine &Uuml;berschrift ein Kapitel
   oder einen Abschnitt anzeigt, stellen Sie Ihre Frage unter Angabe der png-Nummer
   (Seitenzahl) ins Projektforum. Abschnitts&uuml;berschriften sind oft in einer
   anderen oder gr&ouml;&szlig;eren Schriftart gedruckt, die wie fett gedruckt
   oder gesperrt aussehen kann; wir markieren sie aber nicht als andere Schriftart,
   fett oder gesperrt. Sie sollten jedoch Markierungen f&uuml;r Kursivschrift oder
   Kapit&auml;lchen einbringen, falls diese in der &Uuml;berschrift vorkommen.
</p>

<h3><a name="maj_div">Weitere Hauptbestandteile eines Buches</a></h3>
<p>Weitere Hauptbestandteile eines Buches wie Vorwort, Inhaltsverzeichnis, Einf&uuml;hrung,
   Prolog, Epilog, Anhang, Quellenverzeichnis, Schlussfolgerung, Glossar, Zusammenfassung,
   Danksagungen, Literaturverzeichnis usw. sollten auf die gleiche Art formatiert
   werden wie Kapitel&uuml;berschriften, <i>d.&nbsp;h.</i> vier Leerzeilen vor
   der &Uuml;berschrift und zwei Leerzeilen vor dem Beginn des Textes.
</p>

<h3><a name="para_side">Randnoten (Marginalien)</a></h3>
<p>Manche B&uuml;cher haben kurze Zusammenfassungen einzelner Abschnitte auf dem
   Seitenrand neben dem Text stehen. Diese werden Randnoten (Marginalien) genannt.
   Platzieren Sie Randnoten &uuml;ber dem Absatz, zu dem sie geh&ouml;ren. Eine
   Randnote sollte mit einer Randnoten-Markierung <tt>[Sidenote:</tt> und <tt>]</tt>
   umschlossen werden, mit dem Text der Randnote darin. Formatieren Sie den Text
   der Randnote so, wie er gedruckt ist. Behalten Sie dabei Zeilenumbr&uuml;che,
   kursive Schrift, etc. bei. Lassen Sie eine Leerzeile nach der Randnote, damit
   sie nicht mit dem Absatz vermischt wird, wenn der Text beim Nachbearbeiten
   umgebrochen wird.
</p>
<p>Falls es mehrere Randnoten f&uuml;r einen Absatz gibt, platzieren Sie diese
   der Reihe nach am Anfang des Absatzes. Lassen Sie zwischen den einzelnen Randnoten
   jeweils eine Leerzeile frei.
</p>
<p>Falls der Absatz auf einer vorhergehenden Seite begonnen hat, platzieren Sie
   die Randnote oben auf der Seite und kennzeichnen Sie sie mit <tt>*</tt>, damit
   der Nachbearbeiter sehen kann, dass sie auf die vorherige Seite geh&ouml;rt,
   so wie hier: <tt>*[Sidenote: <font color="red">(Text der Randnote)</font>]</tt>.
   Der Nachbearbeiter wird sie an die richtige Stelle verschieben.
</p>
<p>Manchmal verlangt ein Projektmanager, dass Sie die Randnoten bei dem Satz
   platzieren, auf den sie sich beziehen, anstatt am Anfang oder Ende des Absatzes.
   In diesem Fall trennen Sie sie nicht mit Leerzeilen ab.
</p>
<!-- END RR -->

  <table width="100%" align="center" border="1" cellpadding="4"
       cellspacing="0" summary="Sidenotes"> <col width="128*">
  <tbody>
    <tr valign="top">
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr valign="top">
      <td width="100%" align="left"><img src="side.png" alt=""
          width="550" height="800"><br>
      </td>
    </tr>
    <tr valign="top">
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr valign="top">
      <td width="100%">
<table summary="" border="0" align="left"><tr><td>
    <p><tt>
    *[Sidenote: Burning<br>
    discs<br>
    thrown into<br>
    the air.]<br>
    <br>
    that such as looked at the fire holding a bit of larkspur<br>
    before their face would be troubled by no malady of the<br>
    eyes throughout the year.[1] Further, it was customary at<br>
    W&uuml;rzburg, in the sixteenth century, for the bishop's followers<br>
    to throw burning discs of wood into the air from a mountain<br>
    which overhangs the town. The discs were discharged by<br>
    means of flexible rods, and in their flight through the darkness<br>
    presented the appearance of fiery dragons.[2]<br>
    <br>
    [Sidenote: The Midsummer<br>
    fires in<br>
    Swabia.]<br>
    <br>
    [Sidenote: Omens<br>
    drawn from<br>
    the leaps<br>
    over the<br>
    fires.]<br>
    <br>
    [Sidenote: Burning<br>
    wheels<br>
    rolled<br>
    down hill.]<br>
    <br>
    In the valley of the Lech, which divides Upper Bavaria<br>
    from Swabia, the midsummer customs and beliefs are, or<br>
    used to be, very similar. Bonfires are kindled on the<br>
    mountains on Midsummer Day; and besides the bonfire<br>
    a tall beam, thickly wrapt in straw and surmounted by a<br>
    cross-piece, is burned in many places. Round this cross as<br>
    it burns the lads dance with loud shouts; and when the<br>
    flames have subsided, the young people leap over the fire in<br>
    pairs, a young man and a young woman together. If they<br>
    escape unsmirched, the man will not suffer from fever, and<br>
    the girl will not become a mother within the year. Further,<br>
    it is believed that the flax will grow that year as high as<br>
    they leap over the fire; and that if a charred billet be taken<br>
    from the fire and stuck in a flax-field it will promote the<br>
    growth of the flax.[3] Similarly in Swabia, lads and lasses,<br>
    hand in hand, leap over the midsummer bonfire, praying<br>
    that the hemp may grow three ells high, and they set fire<br>
    to wheels of straw and send them rolling down the hill.<br>
    Among the places where burning wheels were thus bowled<br>
    down hill at Midsummer were the Hohenstaufen mountains<br>
    in Wurtemberg and the Frauenberg near Gerhausen.[4]<br>
    At Deffingen, in Swabia, as the people sprang over the mid-*<br>
    <br>
    [Footnote 1: &lt;i&gt;Op. cit.&lt;/i&gt; iv. 1. p. 242. We have<br>
    seen (p. 163) that in the sixteenth<br>
    century these customs and beliefs were<br>
    common in Germany. It is also a<br>
    German superstition that a house which<br>
    contains a brand from the midsummer<br>
    bonfire will not be struck by lightning<br>
    (J. W. Wolf, &lt;i&gt;Beitr&auml;ge zur deutschen<br>
    Mythologie&lt;/i&gt;, i. p. 217, &sect; 185).]<br>
    <br>
    [Footnote 2: J. Boemus, &lt;i&gt;Mores, leges et ritus<br>
    omnium gentium&lt;/i&gt; (Lyons, 1541), p.<br>
    226.]<br>
    <br>
    [Footnote 3: Karl Freiherr von Leoprechting,<br>
    &lt;i&gt;Aus dem Lechrain&lt;/i&gt; (Munich, 1855),<br>
    pp. 181 &lt;i&gt;sqq.&lt;/i&gt;; W. Mannhardt, &lt;i&gt;Der<br>
    Baumkultus&lt;i&gt;, p. 510.]<br>
    <br>
    [Footnote 4: A. Birlinger, &lt;i&gt;Volksth&uuml;mliches aus<br>
    Schwaben&lt;/i&gt; (Freiburg im Breisgau, 1861-1862),<br>
    ii. pp. 96 &lt;i&gt;sqq.&lt;/i&gt;, &sect; 128, pp. 103<br>
    &lt;i&gt;sq.&lt;/i&gt;, &sect; 129; &lt;i&gt;id.&lt;/i&gt;, &lt;i&gt;Aus Schwaben&lt;/i&gt; (Wiesbaden,<br>
    1874), ii. 116-120; E. Meier,<br>
    &lt;i&gt;Deutsche Sagen, Sitten und Gebr&auml;uche<br>
    aus Schwaben&lt;/i&gt; (Stuttgart, 1852), pp.<br>
    423 &lt;i&gt;sqq.&lt;/i&gt;; W. Mannhardt, &lt;i&gt;Der Baumkultus&lt;/i&gt;,<br>
    p. 510.]<br>
    </tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="para_space">Absatzabst&auml;nde und -einr&uuml;ckungen</a></h3>
<p>F&uuml;gen Sie eine Leerzeile vor dem Beginn eines Absatzes ein, auch wenn
   der Absatz am Anfang der Seite beginnt. Die erste Zeile des Absatzes erh&auml;lt
   normalerweise keinen Zeileneinzug. Sind Abs&auml;tze aber bereits einger&uuml;ckt,
   so bem&uuml;hen Sie sich nicht, die Leerzeichen zu entfernen &ndash; das kann
   automatisch in der Nachbearbeitung erledigt werden.
</p>
<p>Ein Beispiel finden Sie im Abschnitt <a href="#chap_head">Kapitel&uuml;berschriften</a>
   weiter unten.
</p>

<h3><a name="mult_col">Mehrspaltige Texte</a></h3>
<p>Formatieren Sie normalen Text, der in zwei Spalten gedruckt wurde, als eine
   Spalte.
</p>
<p>Mehrspaltiger Text innerhalb eines sonst einspaltigen Abschnitts sollte als
   eine fortlaufende Spalte formatiert werden. Dabei kommt die Spalte ganz links
   zuerst, anschlie&szlig;end der Text der n&auml;chsten und so weiter. Sie brauchen
   den Umbruch der Spalten nicht extra zu kennzeichnen; verbinden Sie einfach die
   Spalten.
</p>
<p>Falls die Spalten Aufz&auml;hlungen enthalten, markieren Sie den Anfang der
   Liste mit <tt>/*</tt> und das Ende mit <tt>*/</tt>, damit die Zeilen bei der
   Nachbearbeitung nicht umgebrochen werden. Lassen Sie eine Leerzeile zwischen
   diesen Markierungen und dem Rest des Textes.
</p>
<p>Lesen Sie dazu auch die Abschnitte <a href="#bk_index">Sachregister und
   Schlagwortverzeichnisse</a>, <a href="#lists">Aufz&auml;hlungen</a> und
   <a href="#tables">Tabellen</a>.
</p>

<h3><a name="illust">Abbildungen</a></h3>
<p>Text zu einer Illustration sollte mit einer Abbildungs-Markierung
   <tt>[Illustration:&nbsp;</tt> und <tt>]</tt> umschlossen werden, mit der
   Bildunterschrift darin. Formatieren Sie die Bildunterschrift so, wie sie
   gedruckt ist. Behalten Sie dabei Zeilenumbr&uuml;che, kursive Schrift, etc. bei.
</p>
<p>Falls eine Abbildung keine Bildunterschrift hat, f&uuml;gen Sie die Markierung
   <tt>[Illustration]</tt> ein.
</p>
<p>Falls sich die Abbildung in der Mitte oder an der Seite eines Absatzes befindet,
   platzieren Sie die Abbildungs-Markierung vor oder hinter dem Absatz und lassen
   Sie eine Leerzeile, um sie zu trennen. Verbinden Sie den Absatz wieder, indem
   Sie alle dadurch verbliebenen Leerzeilen entfernen.
</p>
<p>Falls es keinen neuen Absatz auf der Seite gibt, kennzeichnen Sie die
   Abbildungs-Markierung mit einem <tt>*</tt> wie hier <tt>*[Illustration:
   <font color="red">(Text der Bildunterschrift)</font>]</tt>, platzieren
   Sie sie ganz oben auf der Seite und lassen Sie eine Leerzeile dahinter.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Illustration">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">
      Beispielvorlage:
      </th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top"> <img src="illust.png" alt=""
          width="500" height="525"> <br>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
   </tr>
    <tr>
    <td width="100%" valign="top">
      <table summary="" border="0" align="left"><tr>
      <td>
      <p><tt>[Illustration: Martha told him that he had always been her ideal and<br>
      that she worshipped him.<br>
      <br>
      &lt;i&gt;Frontispiece&lt;/i&gt;<br>
      <br>
      &lt;i&gt;Her Weight in Gold&lt;/i&gt;]
      </tt></p>
      </td></tr></table>
    </td>
    </tr>
  </tbody>
</table>

<br>
<table width="100%" align="center" border="1"  cellpadding="4"
 cellspacing="0" summary="Illustration in Middle of Paragraph">
  <tbody>
   <tr>
     <th align="left" bgcolor="cornsilk">Beispielvorlage: (Abbildung in der Mitte eines Absatzes)</th>
   </tr>
   <tr align="left">
     <td width="100%" valign="top"> <img src="illust2.png" alt=""
         width="500" height="514"> <br>
     </td>
   </tr>
   <tr>
     <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
   </tr>
    <tr valign="top">
     <td>
<table summary="" border="0" align="left"><tr><td>
     <p><tt>
     such study are due to Italians. Several of these instruments<br>
     have already been described in this journal, and on the present<br>
     occasion we shall make known a few others that will<br>
     serve to give an idea of the methods employed.<br>
     </tt></p>
     <p><tt>[Illustration: &lt;sc&gt;Fig.&lt;/sc&gt; 1.--APPARATUS FOR THE STUDY OF HORIZONTAL<br>
     SEISMIC MOVEMENTS.]</tt></p>
     <p><tt>
     For the observation of the vertical and horizontal motions<br>
     of the ground, different apparatus are required. The</tt>
     </p>
</td></tr></table>
    </td>
    </tr>
  </tbody>
</table>

<h3><a name="footnotes">Fu&szlig;noten/Endnoten</a></h3>
<p><b>Fu&szlig;noten stehen nicht im Flie&szlig;text</b>, d.&nbsp;h. der Text
   der Fu&szlig;note steht am unteren Seitenrand und ein Fu&szlig;notenzeichen
   an der Stelle, auf die der Text sich bezieht.
</p>
<p>Beim Formatieren bedeutet das:
</p>
<p>1. Die Zahl, der Buchstabe oder ein anderes Zeichen, das den Ort der Fu&szlig;note
   kennzeichnet, wird mit eckigen Klammern (<tt>[</tt> und <tt>]</tt>) umgeben
   und unmittelbar rechts neben das Wort<tt>[1]</tt> oder das Satzzeichen
   gesetzt,<tt>[2]</tt> auf das sich die Fu&szlig;note bezieht (wie im Text
   dargestellt und in den beiden Beispielen in diesem Satz).
</p>
<p>Sind Fu&szlig;noten mit einer Reihe von Sonderzeichen markiert (*, &dagger;,
   &Dagger;, &sect; usw.), dann ersetzen wir diese durch  fortlaufende
   Gro&szlig;buchstaben (A, B, C usw.).
</p>
<p>2. Eine Fu&szlig;note sollte mit einer Fu&szlig;noten-Markierung <tt>[Footnote
   #:&nbsp;</tt> und <tt>]</tt> umschlossen werden, mit dem Text der Fu&szlig;note
   darin und der Zahl oder dem Buchstaben an der Stelle, wo sich das # in der
   Fu&szlig;noten-Markierung befindet. Formatieren Sie den Text der Fu&szlig;note
   so, wie sie gedruckt ist. Behalten Sie dabei Zeilenumbr&uuml;che, kursive
   Schrift, etc. bei. Auch die Position am unteren Seitenrand bleibt unver&auml;ndert.
   Achten Sie darauf, dass Sie vor der Fu&szlig;note das gleiche Fu&szlig;notenzeichen
   verwenden wie im Text. Setzen Sie jede Fu&szlig;note auf eine eigene Zeile in der
   Reihenfolge ihres Auftretens im Text. Wenn es mehr als eine gibt, trennen Sie die
   einzelnen Fu&szlig;noten durch Leerzeilen.
</p>
<!-- END RR -->

<p>Bei einigen B&uuml;chern bittet Sie&nbsp;der Projektmanager m&ouml;glicherweise,
   die Fu&szlig;noten im Flie&szlig;text anzuordnen. Lesen Sie in diesem Fall die
   <a href="#comments">Projektkommentare</a> f&uuml;r weitere Anweisungen.
</p>
<p>Im Text und der Beispielvorlage zu <a href="#page_hf">Kopf- und Fu&szlig;zeilen</a>
   finden Sie eine Beispiel-Fu&szlig;note.
</p>
<p>Falls es eine Fu&szlig;note am unteren Seitenrand ohne Fu&szlig;notenzeichen
   im Text gibt, insbesondere wenn sie mitten im Text oder mitten im Wort beginnt,
   handelt es sich dabei wahrscheinlich um die Fortsetzung einer Fu&szlig;note
   von einer vorhergehenden Seite. Lassen Sie sie am unteren Seitenrand bei den
   anderen Fu&szlig;noten stehen und umschlie&szlig;en Sie sie mit <tt>*[Footnote:
   <font color="red">(Text der Fu&szlig;note)</font>]</tt> (ohne jegliches
   Fu&szlig;notenzeichen). Das <tt>*</tt> zeigt an, dass die Fu&szlig;note
   fortgesetzt wurde, und macht den Nachbearbeiter darauf aufmerksam.
</p>
<p>Falls eine Fu&szlig;note auf der n&auml;chsten Seite fortgesetzt wird (d.&nbsp;h.
   die Seite ist zu Ende, aber die Fu&szlig;note nicht), lassen Sie die Fu&szlig;note
   am unteren Seitenrand stehen und setzen Sie ein Sternchen <tt>*</tt> ans Ende
   der Fu&szlig;note, so wie hier: <tt>[Footnote 1: <font color="red">(Text der
   Fu&szlig;note)</font>]*</tt>. Das <tt>*</tt> zeigt an, dass die Fu&szlig;note
   vorzeitig abbricht, und macht den Nachbearbeiter darauf aufmerksam, der sie
   sp&auml;ter mit dem Rest des Fu&szlig;notentextes verbinden wird.
</p>
<p>Falls eine fortgesetzte Fu&szlig;note mit einem getrennten Wort endet oder
   beginnt, markieren Sie sowohl die Fu&szlig;note als auch das Wort mit <tt>*</tt>,
   also:<br>
   <tt>[Footnote 1: Diese Fu&szlig;note wird auf der n&auml;chsten Seite fortgesetzt;
   das letzte Wort wird ebenfalls auf der n&auml;ch-*]*</tt><br>
   f&uuml;r den ersten Teil und<br>
   <tt>*[Footnote: *sten Seite fortgesetzt.]</tt>.
</p>
<p>Wenn eine Fu&szlig;note bzw. Endnote im Text markiert ist, aber auf dieser
   Seite nicht erscheint, behalten Sie das Fu&szlig;noten-/Endnotenzeichen bei
   und setzen Sie es in eckige Klammern (<tt>[</tt> und <tt>]</tt>). In wissenschaftlichen
   und technischen B&uuml;chern werden Fu&szlig;noten oft am Ende des Kapitels
   zusammengefasst &ndash; siehe &sbquo;Endnoten&lsquo; weiter unten.
</p>

<table width="100%" border="1"  cellpadding="4" cellspacing="0" align="center" summary="Footnote Examples">
  <tbody>
    <tr>
      <th valign="top" align="left" bgcolor="cornsilk">Ausgangstext:</th>
    </tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    The principal persons involved in this argument were Caesar<sup>1</sup>, former military<br>
    leader and Imperator, and the orator Cicero<sup>2</sup>. Both were of the aristocratic<br>
    (Patrician) class, and were quite wealthy.<br>
    <hr align="left" width="50%" noshade size="2">
    <font size=-1><sup>1</sup> Gaius Julius Caesar.</font><br>
    <font size=-1><sup>2</sup> Marcus Tullius Cicero.</font>
</td></tr></table>
      </td>
    </tr>
    <tr>
      <th valign="top" align="left" bgcolor="cornsilk">Richtig formatierte Fu&szlig;note:</th>
    </tr>
      <tr valign="top">
      <td>
<table summary="" border="0" align="left"><tr><td>
    <tt>The principal persons involved in this argument were Caesar[1], former military</tt><br>
    <tt>leader and Imperator, and the orator Cicero[2]. Both were of the aristocratic</tt><br>
    <tt>(Patrician) class, and were quite wealthy.</tt><br>
    <br>
    <tt>[Footnote 1: Gaius Julius Caesar.]</tt><br>
    <br>
    <tt>[Footnote 2: Marcus Tullius Cicero.]</tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<p>In manchen B&uuml;chern werden Fu&szlig;noten durch eine horizontale Linie
   vom Text getrennt. Wir behalten diese nicht bei; also lassen Sie nur eine
   Leerzeile zwischen Haupttext und Fu&szlig;noten (siehe Beispiel oben).
</p>
<p><b>Endnoten</b> sind einfach Fu&szlig;noten, die am Ende eines Kapitels oder
   am Ende des Buches zusammengefasst sind, statt unten auf jeder Seite. Sie werden
   in der gleichen Weise formatiert wie Fu&szlig;noten. Wo Sie ein Endnotenzeichen
   im Text finden, umgeben Sie es mit eckigen Klammern (<tt>[</tt> und <tt>]</tt>).
   Wenn Sie eine Seite mit Endnoten formatieren, umschlie&szlig;en Sie den Text
   jeder Endnote mit <tt>[Footnote #:&nbsp;<font color="red">(Text der Endnote)</font>]</tt>,
   mit dem Text der Endnote dazwischen und dem Endnotenzeichen dort, wo sich das
   # befindet. Trennen Sie die Endnoten durch Leerzeilen, damit sie getrennte Abs&auml;tze
   bleiben, wenn der Text bei der Nachbearbeitung umgebrochen wird.
</p>
<!-- Need an example of Endnotes, maybe? Good idea!-->

<p><b>Fu&szlig;noten in <a href="#poetry">Gedichten</a> oder
   <a href="#tables">Tabellen</a></b> sollten genauso behandelt werden wie andere
   Fu&szlig;noten. Die Formatierer sollten sie markieren und am Fu&szlig; der
   Seite belassen; der Nachbearbeiter wird ihre endg&uuml;ltige Position festlegen.
</p>

<table width="100%" align="center" border="1" cellpadding="4" cellspacing="0" summary="Footnotes">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Ausgangstext &ndash; Gedicht mit Fu&szlig;noten:</th></tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    Mary had a little lamb<sup>1</sup><br>
    &nbsp;&nbsp;&nbsp;Whose fleece was white as snow<br>
    And everywhere that Mary went<br>
    &nbsp;&nbsp;&nbsp;The lamb was sure to go!<br>
    <hr align="left" width="50%" noshade size=2>
    <font size=-2><sup>1</sup> This lamb was obviously of the Hampshire breed,<br>
    well known for the pure whiteness of their wool.</font>
</td></tr></table>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    <tt>/*<br>
    Mary had a little lamb[1]<br>
    &nbsp;&nbsp;Whose fleece was white as snow<br>
    And everywhere that Mary went<br>
    &nbsp;&nbsp;The lamb was sure to go!<br>
    */<br>
    <br>
    [Footnote 1: This lamb was obviously of the Hampshire breed,<br>
    well known for the pure whiteness of their wool.]<br>
    </tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="italics">Kursiver Text</a></h3>
<p>Formatieren Sie <i>kursiv</i> gedruckten Text mit einem <tt>&lt;i&gt;</tt>
   am Anfang und einem <tt>&lt;/i&gt;</tt> am Ende des kursiv gedruckten Textes.
   (Beachten Sie den Schr&auml;gstrich &bdquo;/&ldquo; in der schlie&szlig;enden
   Markierung.)
</p>
<p>Satzzeichen bleiben <b>au&szlig;erhalb</b> der Markierungen f&uuml;r Kursivdruck,
   au&szlig;er der gesamte Satz oder Abschnitt ist kursiv gedruckt, oder aber die
   Interpunktion selbst ist Teil eines Ausdrucks, Titels oder einer Abk&uuml;rzung
   in kursiver Schrift.
</p>
<p>Die Punkte, die ein abgek&uuml;rztes Wort im Titel einer Zeitschrift wie z.&nbsp;B.
   <i>Phil. Trans.</i> kennzeichnen, werden im Hinblick auf Kursivauszeichnung
   als Teil des Titels betrachtet und in die Kursiv-Markierungen einbezogen, also:
   <tt>&lt;i&gt;Phil. Trans.&lt;/i&gt;</tt>.
</p>
<p>Datumsangaben oder &auml;hnliches formatieren Sie insgesamt als kursiv gedruckt,
   anstatt die W&ouml;rter als kursiv und die Zahlen als nicht-kursiv zu markieren.
   Der Grund daf&uuml;r ist, dass in vielen Schriftarten &auml;lterer Texte die
   Zahlen in regul&auml;rer und kursiver Schrift gleich aussehen.
</p>
<p>Falls der kursiv gedruckte Text aus einer Reihe/Liste von W&ouml;rtern oder
   Namen besteht, markieren Sie diese jeweils einzeln mit Kursiv-Markierungen.
</p>
<!-- END RR -->

<p><b>Beispiele</b> &ndash; Kursiver Text:
</p>

<table width="100%" align="center" border="1" cellpadding="4" cellspacing="0" summary="Italics">
  <tbody>
    <tr>
      <th valign="top" bgcolor="cornsilk">Ausgangstext:</th>
      <th valign="top" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td valign="top"><i>Enacted </i>4<i> July, </i>1776 </td>
      <td valign="top"><tt>&lt;i&gt;Enacted 4 July, 1776&lt;/i&gt;</tt> </td>
    </tr>
    <tr>
      <td valign="top"><i>God knows what she saw in me!</i> I spoke<br> in such an affected manner.</td>
      <td valign="top"><tt>&lt;i&gt;God knows what she saw in me!&lt;/i&gt; I spoke<br> in such an affected manner.</tt></td>
    </tr>
    <tr>
      <td valign="top">As in many other of these <i>Studies</i>, and</td>
      <td valign="top"><tt>As in many other of these &lt;i&gt;Studies&lt;/i&gt;, and</tt></td>
    </tr>
    <tr>
      <td valign="top">(<i>Psychological Review</i>, 1898, p. 160)</td>
      <td valign="top"><tt>(&lt;i&gt;Psychological Review&lt;/i&gt;, 1898, p. 160)</tt></td>
    </tr>
    <tr>
      <td valign="top">L. Robinson, art. "<i>Ticklishness</i>,"</td>
      <td valign="top"><tt>L. Robinson, art. "&lt;i&gt;Ticklishness&lt;/i&gt;,"</tt></td>
    </tr>
    <tr>
      <td valign="top" align="right"><i>December</i> 3, <i>morning</i>.<br />
                     1323 Picadilly Circus</td>
      <td valign="top"><tt>/*<br />
         &lt;i&gt;December 3, morning.&lt;/i&gt;<br />
         1323 Picadilly Circus<br />
         */</tt></td>
    </tr>
    <tr>
      <td valign="top">
      Volunteers may be tickled pink to read<br>
      <i>Ticklishness</i>, <i>Tickling and Laughter</i>,<br>
      <i>Remarks on Tickling and Laughter</i><br>
      and <i>Ticklishness, Laughter and Humour</i>.
      </td>
      <td valign="top">
      <tt>Volunteers may be tickled pink to read<br>
      &lt;i&gt;Ticklishness&lt;/i&gt;, &lt;i&gt;Tickling and Laughter&lt;/i&gt;,<br>
      &lt;i&gt;Remarks on Tickling and Laughter&lt;/i&gt;<br>
      and &lt;i&gt;Ticklishness, Laughter and Humour&lt;/i&gt;.</tt>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="bold">Fett gedruckter Text</a></h3>
<p>Formatieren Sie <b>fett gedruckten Text</b> (Text, der in kr&auml;ftigeren
   Lettern gedruckt ist) mit einem <tt>&lt;b&gt;</tt> vor dem fett gedruckten Text
   und einem <tt>&lt;/b&gt;</tt> danach. (Beachten Sie den Schr&auml;gstrich
   &bdquo;/&ldquo; in der schlie&szlig;enden Markierung.)
</p>
<p>Satzzeichen bleiben <b>au&szlig;erhalb</b> der Markierungen f&uuml;r Fettdruck,
   au&szlig;er der gesamte Satz oder Abschnitt ist fett gedruckt, oder aber die
   Interpunktion selbst ist Teil eines Ausdrucks, Titels oder einer Abk&uuml;rzung
   in fetter Schrift.
</p>
<p>Im Text und der Beispielvorlage zu <a href="#page_hf">Kopf- und Fu&szlig;zeilen</a>
   finden Sie ein Beispiel.
</p>
<p>Manche Projektmanager legen in den <a href="#comments">Projektkommentaren</a>
   fest, dass fett gedruckter Text als Text in Gro&szlig;buchstaben wiedergegeben
   werden soll.
</p>

<h3><a name="supers">Hochgestellte Zeichen</a></h3>
<p>In &auml;lteren B&uuml;chern wurden W&ouml;rter h&auml;ufig mit verk&uuml;rzten
   Endungen dargestellt, die dann hochgestellt wurden. Zum Beispiel:<br>
   &nbsp;&nbsp;&nbsp;&nbsp;Gen<sup>rl</sup> Washington defeated L<sup>d</sup> Cornwall's army.<br>
   Formatieren Sie diese, indem Sie einen einzelnen Zirkumflex ^ einsetzen, gefolgt
   von dem hochgestellten Text. Also so:<br>
   &nbsp;&nbsp;&nbsp;&nbsp;<tt>Gen^rl Washington defeated L^d Cornwall's army.</tt>
</p>
<p>In wissenschaftlichen und technischen Werken formatieren Sie hochgestellte
   Zeichen mit umschlie&szlig;enden geschweiften Klammern, <tt>{</tt> und <tt>}</tt>,
   selbst wenn nur ein Zeichen hochgestellt ist.
   <br>Zum Beispiel wird
   <br>&nbsp;&nbsp;&nbsp;&nbsp;... up to x<sup>n-1</sup> elements in the array.
   <br>formatiert als
   <br>&nbsp;&nbsp;&nbsp;&nbsp;<tt>... up to x^{n-1} elements in the array.<br></tt>
</p>
<p>Manche Projektmanager legen in den <a href="#comments">Projektkommentaren</a>
   fest, dass hochgestellte Zeichen anders markiert werden sollen.
</p>

<h3><a name="subscr">Tiefgestellte Zeichen</a></h3>
<p>Tiefgestellte Zeichen kommen oft in wissenschaftlichen Texten vor, in anderen
   Werken sind sie nicht &uuml;blich. Formatieren Sie tiefgestellte Zeichen durch
   Einf&uuml;gen eines Unterstriches <tt>_</tt> und Umschlie&szlig;en der Zeichen
   mit geschweiften Klammern <tt>{</tt> und <tt>}</tt>.<br>
   Zum Beispiel wird<br>
   &nbsp;&nbsp;&nbsp;&nbsp;H<sub>2</sub>O.<br>
   formatiert als:<br>
   &nbsp;&nbsp;&nbsp;&nbsp;<tt>H_{2}O.<br></tt>
</p>

<h3><a name="underl">Unterstrichener Text</a></h3>
<p>Formatieren Sie <u>unterstrichenen Text</u> wie <a href="#italics">kursiv
   gedruckten</a>, mit <tt>&lt;i&gt;</tt> und <tt>&lt;/i&gt;</tt>. (Beachten
   Sie den Schr&auml;gstrich &bdquo;/&ldquo; in der schlie&szlig;enden Markierung.)
</p>
<p>Unterstreichungen wurden oft benutzt, um eine Betonung anzuzeigen, wenn der
   Schriftsetzer den Text nicht kursiv setzen <i>konnte</i>, etwa in einem
   maschinengeschriebenen Dokument.
</p>
<p>Manche Projektmanager legen in den <a href="#comments">Projektkommentaren</a>
   fest, dass unterstrichener Text mit <tt>&lt;u&gt;</tt> und <tt>&lt;/u&gt;</tt>
   markiert werden soll.
</p>

<h3><a name="spaced">G e s p e r r t e r &nbsp; Text</a></h3>
<p>Formatieren Sie &nbsp; g e s p e r r t e n &nbsp; T e x t &nbsp; mit
   <tt>&lt;g&gt;</tt> vor dem Text und <tt>&lt;/g&gt;</tt> danach. (Beachten
   Sie den Schr&auml;gstrich &bdquo;/&ldquo; in der schlie&szlig;enden Markierung.)
   Entfernen Sie &uuml;berfl&uuml;ssige Leerzeichen zwischen den einzelnen
   Buchstaben der W&ouml;rter.
</p>
<p>Satzzeichen bleiben <b>au&szlig;erhalb</b> der Markierungen, au&szlig;er der
   gesamte Satz oder Abschnitt ist gesperrt gedruckt, oder aber die Interpunktion
   selbst ist Teil eines gesperrten Ausdrucks.
</p>
<p>Diese schriftsetzerische Technik wurde in vielen &auml;lteren, insbesondere
   deutschsprachigen B&uuml;chern benutzt, um einen Teil des Textes zu betonen.
</p>

<h3><a name="font_ch">&Auml;nderungen der Schriftart</a></h3>
<p>Formatieren Sie eine &Auml;nderung der Schriftart innerhalb eines Absatzes
   oder einer Zeile mit normalem Text durch <tt>&lt;f&gt;</tt> vor der
   &Auml;nderung der Schriftart und <tt>&lt;/f&gt;</tt> danach. (Beachten Sie
   den Schr&auml;gstrich &bdquo;/&ldquo; in der schlie&szlig;enden Markierung.)
   Benutzen Sie diese Markierungen f&uuml;r alle besonderen Schriftarten oder
   sonstigen Formatierungen, <b>au&szlig;er</b> bei fett, kursiv, in Kapit&auml;lchen
   und gesperrt gedrucktem Text, wof&uuml;r es jeweils eigene Markierungen gibt.
</p>
<p>Diese Markierungen sollten z. B. in folgenden F&auml;llen verwendet werden:
</p>
<ul compact>
  <li>Antiqua-Schrift innerhalb von Frakturschrift</li>
  <li>gebrochene Schrift innerhalb eines Abschnitts einer regul&auml;ren Schriftart</li>
  <li>eine kleinere oder gr&ouml;&szlig;ere Schriftart nur dann, wenn sie sich
    <b>innerhalb</b> eines Absatzes mit einer regul&auml;ren Schriftart befindet
    (ganze Abs&auml;tze in einer anderen Schriftart oder -gr&ouml;&szlig;e: siehe
    Abschnitt <a href="#block_qt">Blockzitate</a>).</li>
  <li>eine gerade Schriftart innerhalb eines kursiv gedruckten Absatzes</li>
</ul>
<p>Die genaue Verwendung der Markierungen in einem Projekt wird &uuml;blicherweise
   in den <a href="#comments">Projektkommentaren</a> erl&auml;utert. Formatierer
   sollten im <a href="#forums">Projektforum</a> nachfragen, wenn eine Kennzeichnung
   erforderlich scheint, aber noch nicht diskutiert wurde.
</p>
<p>Satzzeichen bleiben <b>au&szlig;erhalb</b> der Markierungen, au&szlig;er der
   gesamte Satz steht in einer anderen Schriftart, oder aber die Interpunktion
   selbst ist Teil eines Ausdrucks, eines Titels oder einer Abk&uuml;rzung in der
   anderen Schriftart.
</p>

<h3><a name="font_sz">Unterschiedliche Schriftgr&ouml;&szlig;en</a></h3>
<p>Normalerweise markieren wir &Auml;nderungen in der Schriftgr&ouml;&szlig;e
   nicht.
</p>
<p>Ausnahmen davon sind, wenn die Schriftgr&ouml;&szlig;e sich &auml;ndert, um
   <a href="#block_qt">Blockzitate</a> anzuzeigen, oder wenn sie sich innerhalb
   eines Absatzes oder einer Textzeile &auml;ndert (siehe
   <a href="#font_ch">&Auml;nderungen der Schriftart</a>).
</p>

<h3><a name="word_caps">W&ouml;rter in Gro&szlig;buchstaben</a></h3>
<p>Formatieren Sie W&ouml;rter, die in Gro&szlig;buchstaben gedruckt sind, als
   Gro&szlig;buchstaben.
</p>
<p>Eine Ausnahme ist das erste <a href="#chap_head">Wort eines Kapitels</a>: In
   vielen alten B&uuml;chern ist das erste Wort in Gro&szlig;buchstaben gedruckt;
   dies sollte in Gro&szlig;- und Kleinschreibung ge&auml;ndert werden. So wird
   "ONCE upon a time," zu "<tt>Once upon a time,</tt>".
</p>

<h3><a name="small_caps">W&ouml;rter in Kapit&auml;lchen</a></h3>
<p><span style="font-variant:small-caps;">Kapit&auml;lchen in gemischter
   Schreibweise (Gro&szlig;buchstaben und Kapit&auml;lchen)</span> und
   <span style="font-variant: small-caps;"> nur kapit&auml;lchen</span>
   werden unterschiedlich behandelt:
</p>
<p>Formatieren Sie W&ouml;rter, die in <span style="font-variant: small-caps;">Kapit&auml;lchen
   in gemischter Schreibweise</span> gedruckt sind, als normale Gro&szlig;- und
   Kleinbuchstaben und umschlie&szlig;en Sie den Text mit den Markierungen
   <tt>&lt;sc&gt;</tt> und <tt>&lt;/sc&gt;</tt>.<br>
&nbsp;&nbsp;&nbsp;&nbsp;Beispiel:
   <span style="font-variant: small-caps;">This is Small Caps</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;wird korrekt formatiert als:
   <tt>&lt;sc&gt;This is Small Caps&lt;/sc&gt;</tt>.
</p>

<p>Formatieren Sie W&ouml;rter, die in <span style="font-variant: small-caps;">nur
   als kapit&auml;lchen</span> gedruckt sind, als Gro&szlig;buchstaben und
   umschlie&szlig;en Sie den Text mit den Markierungen <tt>&lt;sc&gt;</tt>
   und <tt>&lt;/sc&gt;</tt>.<br>
&nbsp;&nbsp;&nbsp;&nbsp;Beispiel:
   You cannot be serious about
   <span style="font-variant: small-caps;">aardvarks</span>!<br>
&nbsp;&nbsp;&nbsp;&nbsp;wird korrekt formatiert als:
   <tt>You cannot be serious about
   &lt;sc&gt;AARDVARKS&lt;/sc&gt;!</tt><br>
</p>

<p>W&ouml;rter in &Uuml;berschriften (Kapitel-/Abschnitts&uuml;berschriften,
   Bildunterschriften usw.), die vollst&auml;ndig aus Gro&szlig;buchstaben
   bestehen, sollten als Gro&szlig;buchstaben formatiert werden, ohne &lt;sc&gt;
   &lt;/sc&gt;. Das erste Wort eines Kapitels in Kapit&auml;lchen sollte in
   Gro&szlig;- und Kleinbuchstaben ohne Markierung ge&auml;ndert werden.
</p>

<h3><a name="drop_caps">&Uuml;berdimensionale, verzierte Gro&szlig;buchstaben
  als Er&ouml;ffnung (Initialen)</a></h3>
<p>Formatieren Sie einen gro&szlig;en, verzierten Buchstaben am Beginn eines Kapitels,
   eines Abschnitts oder einen Absatzes genau so, als w&auml;re er ein gew&ouml;hnlicher
   Buchstabe.
</p>

<h3><a name="em_dashes">Bindestriche, kurze und lange Gedankenstriche</a></h3>
<p>Normalerweise kommen in B&uuml;chern vier Arten solcher Zeichen vor:
  <ol compact>
    <li><i>Bindestriche:</i> Sie werden verwendet, um zwei W&ouml;rter oder eine
        Vor- oder Nachsilbe mit einem Wort zu <b>verbinden</b>.
    <br>Belassen Sie diese als einzelnen Bindestrich, ohne Leerzeichen davor oder
        danach.
    <br>Beachten Sie, dass es eine allgemeine Ausnahme dazu gibt, die im zweiten
        Beispiel weiter unten gezeigt wird.
    </li>
    <li><i>Kurze Gedankenstriche (En-dashes):</i> Sie sind etwas l&auml;nger als
        der Bindestrich und werden f&uuml;r <b>Zahlenbereiche</b> oder als mathematisches
        <b>Minuszeichen</b> verwendet.
    <br>Formatieren Sie diese ebenfalls als einen einzelnen Bindestrich. Ob Leerzeichen
        davor oder danach stehen, h&auml;ngt davon ab, wie es im Buch gemacht wurde.
        Normalerweise gilt: keine Leerzeichen bei Zahlenbereichen, aber Leerzeichen
        um mathematische Minuszeichen, manchmal auf beiden Seiten, manchmal nur davor.
    </li>
    <li><i>Lange (Em-dashes) und extralange Gedankenstriche:</i> Sie dienen in
        englischsprachigen Texten als <b>Trennzeichen</b> zwischen
        W&ouml;rtern&mdash;zum Beispiel f&uuml;r Einsch&uuml;be wie diesen&mdash;,
        oder wenn einem Sprecher das Wort in der Kehle steckenbl&mdash;&mdash;!
    <br>Formatieren Sie diese als zwei oder, bei besonders langen Gedankenstrichen,
        als vier Bindestriche. Setzen Sie kein Leerzeichen davor oder danach, auch
        wenn es im Buch so aussieht.
    </li>
    <li><i>Bewusst ausgelassene bzw. zensierte W&ouml;rter oder Namen:</i><br>
        Formatieren Sie diese als vier Bindestriche. Deutet der Gedankenstrich ein
        ganzes Wort an, so werden Leerzeichen davor und danach so gesetzt, als
        st&uuml;nde das Wort da. Wenn er nur Teil eines Wortes ersetzt, werden keine
        Leerzeichen eingef&uuml;gt. Ist ein normal langer Gedankenstrich gedruckt (in
        der L&auml;nge eines &bdquo;Em-dash&ldquo;), dann verwenden Sie auch beim
        Korrekturlesen nur zwei Bindestriche daf&uuml;r.
    </li>
  </ol>
<p>Anmerkung: Steht ein langer Gedankenstrich am Anfang oder am Ende einer Zeile
   des OCR-Textes, dann verbinden Sie ihn so mit der vorhergehenden oder nachfolgenden
   Zeile, dass weder Leerzeichen noch Zeilenumbruch rund um den Gedankenstrich
   stehen. Nur wenn der Autor den Gedankenstrich verwendet hat, um einen Absatz
   bzw. eine Gedicht- oder Dialogzeile zu beginnen bzw. zu beenden, sollten Sie
   ihn am Anfang bzw. Ende einer Zeile stehen lassen. (Siehe Beispiele in der Tabelle
   unten.)
</p>
<!-- END RR -->

<p><b>Beispiele</b> &ndash; Bindestriche, kurze und lange Gedankenstriche
</p>

<table width="100%" align="center" border="1"  cellpadding="4" cellspacing="0" summary="Hyphens and Dashes">
  <tbody>
    <tr>
      <th valign="top" bgcolor="cornsilk">Vorlage:</th>
      <th valign="top" bgcolor="cornsilk">Richtig formatierter Text:</th>
      <th valign="top" bgcolor="cornsilk">Typ:</th>
    </tr>
    <tr>
      <td valign="top">semi-detached</td>
      <td valign="top"><tt>semi-detached</tt></td>
      <td>Bindestrich</td>
    </tr>
    <tr>
      <td valign="top">three- and four-part harmony</td>
      <td valign="top"><tt>three- and four-part harmony</tt></td>
      <td>Bindestrich</td>
    </tr>
    <tr>
      <td valign="top">discoveries which the Crus-<br>
        aders made and brought home with</td>
      <td valign="top"><tt>discoveries which the Crusaders<br>
        made and brought home with</tt></td>
      <td>Bindestrich</td>
    </tr>
    <tr>
      <td valign="top">factors which mold char-<br>
        acter&mdash;environment, training and heritage,</td>
      <td valign="top"><tt>factors which mold character--environment,<br>
        training and heritage,</tt>
      <td>Bindestrich</td>
    </tr>
    <tr>
      <td valign="top">See pages 21&ndash;25</td>
      <td valign="top"><tt>See pages 21-25</tt></td>
      <td>kurzer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">&ndash;14&deg; below zero</td>
      <td valign="top"><tt>-14&deg; below zero</tt></td>
      <td>kurzer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">X &ndash; Y = Z</td>
      <td valign="top"><tt>X - Y = Z</tt></td>
      <td>kurzer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">2&ndash;1/2</td>
      <td valign="top"><tt>2-1/2</tt></td>
      <td>kurzer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">I am hurt;&mdash;A plague<br>
        on both your houses!&mdash;I am dead.</td>
      <td valign="top"><tt>I am hurt;--A plague<br>
        on both your houses!--I am dead.</tt></td>
      <td>langer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">sensations&mdash;sweet, bitter, salt, and sour<br>
        &mdash;if even all of these are simple tastes. What</td>
      <td valign="top"><tt>sensations--sweet, bitter, salt, and sour--if<br>
        even all of these are simple tastes. What</tt></td>
      <td>langer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">senses&mdash;touch, smell, hearing, and sight&mdash;<br>
        with which we are here concerned,</td>
      <td valign="top"><tt>senses--touch, smell, hearing, and sight--with<br>
        which we are here concerned,</tt></td>
      <td>langer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">It is the east, and Juliet is the sun!&mdash;</td>
      <td valign="top"><tt>It is the east, and Juliet is the sun!--</tt></td>
      <td>langer Gedankenstrich</td>
    </tr>
    <tr>
      <td valign="top">"Three hundred&mdash;&mdash;" "years," she was going to
        say, but the left-hand cat interrupted her.</td>
      <td valign="top"><tt>"Three hundred----" "years," she was going to
        say, but the left-hand cat interrupted her.</tt></td>
      <td>Auslassungszeichen</td>
    </tr>
    <tr>
      <td valign="top">As the witness Mr. &mdash;&mdash; testified,</td>
      <td valign="top"><tt>As the witness Mr. ---- testified,</tt></td>
      <td>Auslassungszeichen</td>
    </tr>
    <tr>
      <td valign="top">As the witness Mr. S&mdash;&mdash; testified,</td>
      <td valign="top"><tt>As the witness Mr. S---- testified,</tt></td>
      <td>Auslassungszeichen</td>
    </tr>
    <tr>
      <td valign="top">the famous detective of &mdash;&mdash;B Baker St.</td>
      <td valign="top"><tt>the famous detective of ----B Baker St.</tt></td>
      <td>Auslassungszeichen</td>
    </tr>
    <tr>
      <td valign="top">&ldquo;You &mdash;&mdash; Yankee&rdquo;, she yelled.</td>
      <td valign="top"><tt>"You ---- Yankee", she yelled.</tt></td>
      <td>Auslassungszeichen</td>
    </tr>
    <tr>
      <td valign="top">&ldquo;I am not a d&mdash;d Yankee&rdquo;, he replied.</td>
      <td valign="top"><tt>"I am not a d--d Yankee", he replied.</tt></td>
      <td>langer Gedankenstrich</td>
    </tr>
  </tbody>
</table>

<h3><a name="eol_hyphen">Trennstriche am Zeilenende</a></h3>
<p>Wenn ein Bindestrich als Trennzeichen am Zeilenende steht, dann f&uuml;gen
   Sie die getrennten Wortteile wieder zusammen. Handelt es sich tats&auml;chlich
   um ein zwei- oder mehrteiliges Wort, wie etwa &bdquo;well-meaning&ldquo;, dann
   bringen Sie die Wortteile in eine Zeile, lassen aber den Bindestrich stehen.
   Wenn ein Wort jedoch getrennt wurde, weil es nicht mehr in die Zeile passte
   und wenn es normalerweise nicht mit Bindestrich geschrieben wird, dann entfernen
   Sie den Trennstrich. Lassen Sie das zusammengef&uuml;gte Wort in der oberen
   Zeile und setzen Sie danach einen Zeilenumbruch, um das Zeilenformat zu erhalten
   &ndash; das macht es einfacher f&uuml;r die Freiwilligen nach Ihnen. Im Abschnitt
   <a href="#em_dashes">Bindestriche, kurze und lange Gedankenstriche</a> dieser
   Richtlinien finden Sie Beispiele (&bdquo;nar-row&ldquo; wird zu &bdquo;narrow&ldquo;,
   aber bei &bdquo;low-lying&ldquo; wird der Bindestrich beibehalten). Folgt nach
   dem Wort noch ein Satzzeichen, so wird dieses ebenfalls in die obere Zeile
   &uuml;bernommen.
</p>
<p>W&ouml;rter wie &bdquo;to-day&ldquo; und &bdquo;to-morrow&ldquo;, die wir heute
   zusammenschreiben, stehen in alten B&uuml;chern oft noch mit Bindestrich. Lassen
   Sie sie mit Bindestrich, wenn sie so im Text stehen. Wenn Sie nicht sicher sind,
   ob der Autor einen Bindestrich verwendet hat, so lassen Sie ihn stehen, setzen
   ein <tt>*</tt> dahinter und verbinden das Wort wie hier: <tt>to-*day</tt>. Das
   Sternchen macht den Nachbearbeiter darauf aufmerksam, der den &Uuml;berblick
   &uuml;ber alle Seiten hat und feststellen kann, wie der Autor das Wort
   &uuml;blicherweise geschrieben hat.
</p>

<h3><a name="eop_hyphen">Trennstriche am Seitenende</a></h3>
<p>Trenn- und Gedankenstriche am Ende einer Seite werden formatiert, indem Sie
   das Trennzeichen oder den Gedankenstrich am Ende der letzten Zeile stehen lassen.
   Setzen Sie ein Sternchen <tt>*</tt> hinter den Trennstrich.<br>
   Zum Beispiel:<br>
   &nbsp;<br>
   &nbsp;&nbsp;&nbsp;&nbsp;something Pat had already become accus-<br>
   wird formatiert als:<br>
   &nbsp;&nbsp;&nbsp;&nbsp;<tt>something Pat had already become accus-*</tt>
</p>
<p>Auf Seiten, die mit einem Teil eines Wortes der vorhergehenden Seite bzw. mit
   einem Gedankenstrich beginnen, setzen Sie ein <tt>*</tt> vor das Teilwort bzw.
   den Gedankenstrich.<br>
   Um das obige Beispiel fortzusetzen: Formatieren Sie<br>
   &nbsp;<br>
   &nbsp;&nbsp;&nbsp;&nbsp;tomed to from having to do his own family<br>
   als:<br>
   &nbsp;&nbsp;&nbsp;&nbsp;<tt>*tomed to from having to do his own family</tt>
</p>
<p>Die Sternchen zeigen dem Nachbearbeiter, dass das Wort beim Zusammenf&uuml;gen
   der einzelnen Seiten zum endg&uuml;ltigen E-Book verbunden werden muss.
</p>

<h3><a name="next_word">Einzelne W&ouml;rter am unteren Seitenrand</a></h3>
<p>Entfernen Sie diese, auch wenn es die zweite H&auml;lfte eines getrennten Wortes
   ist.
</p>
<p>In einigen &auml;lteren B&uuml;chern verweist das einzelne Wort am unteren
   Seitenrand (genannt &bdquo;Kustos&ldquo;, &uuml;blicherweise am rechten Rand
   gedruckt) auf das erste Wort auf der n&auml;chsten Seite des Buches. Es half
   dem Drucker, die richtige R&uuml;ckseite (genannt &bdquo;Verso&ldquo;) zu drucken,
   und seinen Gehilfen, die Seiten f&uuml;r das Binden vorzubereiten. Au&szlig;erdem
   diente es als Lesehilfe, damit der Leser nicht mehr als eine Seite umbl&auml;tterte.
</p>
<!-- END RR -->
<!-- We need an example here! -->


<h3><a name="contract">Zusammenziehungen</a></h3>
<p>Entfernen Sie Leerzeichen in Zusammenziehungen: zum Beispiel sollte
   <tt>would&nbsp;n't</tt> als <tt>wouldn't</tt> formatiert werden.
</p>
<p>Diese L&uuml;cken waren h&auml;ufig eine Konvention der fr&uuml;hen Drucker.
   Sie behielten den Zwischenraum bei, um darauf hinzuweisen, dass &bdquo;would&ldquo;
   und &bdquo;not&ldquo; urspr&uuml;nglich getrennte W&ouml;rter waren. Manchmal
   ist der Zwischenraum auch nur ein Artefakt der OCR-Software. In beiden F&auml;llen
   wird er jedoch entfernt.
</p>
<p>Unter Umst&auml;nden geben Projektmanager in den <a href="#comments">Projektkommentaren</a>
   vor, dass solche Leerzeichen nicht entfernt werden sollen. Dies ist vor allem
   bei Texten der Fall, die Umgangssprache bzw. Dialekt enthalten oder in einer
   anderen Sprache als Englisch verfasst sind.
</p>


<h3><a name="poetry">Gedichte/Epigramme</a></h3>
<p>Dieser Abschnitt bezieht sich auf vereinzelte Gedichte oder Epigramme, die
   in einem Prosawerk vorkommen. Ganze Gedichtb&auml;nde werden in den
   <a href="doc-poet.php">Sonderrichtlinien f&uuml;r Lyrik</a> behandelt.
</p>
<p>Markieren Sie Gedichte oder Epigramme, damit der Nachbearbeiter sie schneller
   finden kann. F&uuml;gen Sie eine separate Zeile mit <tt>/*</tt> am Anfang des
   Gedichtes oder Epigramms und eine separate Zeile mit <tt>*/</tt> am Ende ein.
   Lassen Sie eine Leerzeile zwischen diesen Markierungen und dem Rest des Textes.
</p>
<p>Behalten Sie die relative Einr&uuml;ckung der Zeilen eines Gedichtes oder Epigramms
   bei. R&uuml;cken Sie die Zeilen dazu um zwei, vier, sechs (oder mehr) Leerzeichen
   ein, damit sie so aussehen wie auf der Vorlage.
</p>
<p>Wenn eine Verszeile zu lang f&uuml;r die gedruckte Seite ist, steht in vielen
   Texten das Ende in der n&auml;chsten Zeile mit einer gro&szlig;en Einr&uuml;ckung
   davor. Diese fortgesetzten Zeilen sollten wieder mit der Zeile dar&uuml;ber
   zusammengef&uuml;gt werden. Fortgesetzte Zeilen&nbsp;beginnen &uuml;blicherweise
   mit einem Kleinbuchstaben. Sie treten wahllos auf und unterscheiden sich von
   normalen Einr&uuml;ckungen, die entsprechend dem Metrum des Gedichts
   regelm&auml;&szlig;ig auftreten.
</p>
<p>Falls das Gedicht auf der gedruckten Seite zentriert ist, versuchen Sie nicht,
   die Zeilen des Gedichtes beim Formatieren zu zentrieren. Verschieben Sie die
   Zeilen an den linken Rand und behalten sie die relative Einr&uuml;ckung der
   Zeilen bei.
</p>
<p><b>Fu&szlig;noten</b> in Gedichten sollten beim Formatieren wie regul&auml;re
   Fu&szlig;noten behandelt werden. Zu den Einzelheiten siehe
   <a href="#footnotes">Fu&szlig;noten</a>.
</p>
<p><b>Zeilennummern</b> in Gedichten sollten beibehalten werden. Stellen Sie sie
   ans Ende der Zeile und lassen Sie einen Abstand von mindestens sechs Leerzeichen
   zwischen den Zeilennummern und dem Ende des Textes. Einzelheiten dazu unter
   <a href="#line_no">Zeilennummern</a>.
</p>
<p>Lesen Sie in jedem Falle die <a href="#comments">Projektkommentare</a> des
   Textes, den Sie formatieren. F&uuml;r Gedichtb&auml;nde gibt es oft besondere
   Anweisungen vom Projektmanager. H&auml;ufig brauchen Sie bei einem Buch, das
   &uuml;berwiegend oder ausschlie&szlig;lich Gedichte enth&auml;lt, nicht allen
   diesen Formatierungsrichtlinien zu folgen.
</p>
<!-- END RR -->

<br>
<table width="100%" align="center" border="1"  cellpadding="4"
       cellspacing="0" summary="Poetry Example">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <th width="100%" valign="top"> <img src="poetry.png" alt=""
          width="500" height="508"> <br>
      </th>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">

<table summary="" border="0" align="left"><tr><td>
<tt>
to the scenery of his own country:<br></tt>
<p><tt>
/*<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oh, to be in England<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now that April's there,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And whoever wakes in England<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sees, some morning, unaware,<br>
That the lowest boughs and the brushwood sheaf<br>
Round the elm-tree bole are in tiny leaf,<br>
While the chaffinch sings on the orchard bough<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In England--now!</tt>
</p><p><tt>
And after April, when May follows,<br>
And the whitethroat builds, and all the swallows!<br>
Hark! where my blossomed pear-tree in the hedge<br>
Leans to the field and scatters on the clover<br>
Blossoms and dewdrops--at the bent spray's edge--<br>
That's the wise thrush; he sings each song twice over,<br>
Lest you should think he never could recapture<br>
The first fine careless rapture!<br>
And though the fields look rough with hoary dew,<br>
All will be gay, when noontide wakes anew<br>
The buttercups, the little children's dower;<br>
--Far brighter than this gaudy melon-flower!<br>
*/<br></tt>
</p><p><tt>
So it runs; but it is only a momentary memory;<br>
and he knew, when he had done it, and to his</tt>
</p>
</td></tr></table>

      </td>
    </tr>
  </tbody>
</table>

<h3><a name="letter">Briefe/Korrespondenz</a></h3>
<p>Formatieren Sie Briefe und Korrespondenz wie <a href="#para_space">Abs&auml;tze</a>.
   F&uuml;gen Sie eine Leerzeile vor dem Anfang des Briefes ein. Sie brauchen keine
   Einr&uuml;ckungen nachzubilden.
</p>
<p>Umschlie&szlig;en Sie aufeinander folgende Kopf- oder Fu&szlig;zeilen (wie
   z.&nbsp;B. Adressen, Datumsangaben, Anreden oder Unterschriften) mit den
   Markierungen <tt>/*</tt> und <tt>*/</tt>. Lassen Sie eine Leerzeile zwischen
   den Markierungen und dem Rest des Textes. Die Markierungen stellen sicher, dass
   die jeweiligen Zeilen beim Nachbearbeiten nicht umgebrochen werden.
</p>
<p>R&uuml;cken Sie die Kopf- und Fu&szlig;zeilen nicht ein, auch wenn sie in der
   Vorlage einger&uuml;ckt oder rechtsb&uuml;ndig sind &ndash; richten Sie sie einfach
   linksb&uuml;ndig aus. Der Nachbearbeiter wird sie entsprechend formatieren.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1"  cellpadding="4"
       cellspacing="0" summary="Letter Example">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <th width="100%" valign="top"> <img src="letter.png" alt=""
          width="500" height="217"> <br>
      </th>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<p><tt>&lt;i&gt;John James Audubon to Claude Fran&ccedil;ois Rozier&lt;/i&gt;</tt></p>
<p><tt>[Letter No. 1, addressed]</tt></p>
<p><tt>/*<br>
&lt;sc&gt;M. Fr. Rozier&lt;/sc&gt;,<br>
Merchant-Nantes.<br>
&lt;sc&gt;New York&lt;/sc&gt;, &lt;i&gt;10 January, 1807.&lt;/i&gt;</tt></p>
<p><tt>
&lt;sc&gt;Dear Sir:&lt;/sc&gt;<br>
*/</tt></p>
<p><tt>
We have had the pleasure of receiving by the &lt;i&gt;Penelope&lt;/i&gt; your<br>
consignment of 20 pieces of linen cloth, for which we send our<br>
thanks. As soon as we have sold them, we shall take great<br>
pleasure in making our return.</tt>
</p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>


<h3><a name="lists">Aufz&auml;hlungen</a></h3>
<p>Umschlie&szlig;en Sie Listen mit den Markierungen <tt>/*</tt> und <tt>*/</tt>.
   Lassen Sie eine Leerzeile zwischen diesen Markierungen und dem Rest des Textes.
   Die Markierungen stellen sicher, dass die jeweiligen Zeilen beim Nachbearbeiten
   nicht umgebrochen werden. Benutzen Sie diese Markierungen f&uuml;r jede Liste,
   die nicht umformatiert werden soll, beispielsweise Listen mit Fragen und Antworten,
   Zutaten in einem Rezept usw.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4" cellspacing="0" summary="List">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Ausgangstext:</th></tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
<pre>
Andersen, Hans Christian   Daguerre, Louis J. M.    Melville, Herman
Bach, Johann Sebastian     Darwin, Charles          Newton, Isaac
Balboa, Vasco Nunez de     Descartes, Ren&eacute;          Pasteur, Louis
Bierce, Ambrose            Earhart, Amelia          Poe, Edgar Allan
Carroll, Lewis             Einstein, Albert         Ponce de Leon, Juan
Churchill, Winston         Freud, Sigmund           Pulitzer, Joseph
Columbus, Christopher      Lewis, Sinclair          Shakespeare, William
Curie, Marie               Magellan, Ferdinand      Tesla, Nikola
</pre>
</td></tr></table>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    <tt>
    /*<br>
    Andersen, Hans Christian<br>
    Bach, Johann Sebastian<br>
    Balboa, Vasco Nunez de<br>
    Bierce, Ambrose<br>
    Carroll, Lewis<br>
    Churchill, Winston<br>
    Columbus, Christopher<br>
    Curie, Marie<br>
    Daguerre, Louis J. M.<br>
    Darwin, Charles<br>
    Descartes, Ren&eacute;<br>
    Earhart, Amelia<br>
    Einstein, Albert<br>
    Freud, Sigmund<br>
    Lewis, Sinclair<br>
    Magellan, Ferdinand<br>
    Melville, Herman<br>
    Newton, Isaac<br>
    Pasteur, Louis<br>
    Poe, Edgar Allan<br>
    Ponce de Leon, Juan<br>
    Pulitzer, Joseph<br>
    Shakespeare, William<br>
    Tesla, Nikola<br>
    */
    </tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="tables">Tabellen</a></h3>
<p>Umschlie&szlig;en Sie Tabellen mit den Markierungen <tt>/*</tt> und <tt>*/</tt>.
   Lassen Sie eine Leerzeile zwischen diesen Markierungen und dem Rest des Textes.
   Die Markierungen stellen sicher, dass die jeweiligen Zeilen beim Nachbearbeiten
   nicht umgebrochen werden. Formatieren Sie die Tabelle mit Hilfe von Leerzeichen,
   damit sie der urspr&uuml;nglichen Tabelle m&ouml;glichst &auml;hnlich sieht.
   Machen Sie die Tabelle nicht breiter als 75 Zeichen. In den Richtlinien von
   Projekt Gutenberg hei&szlig;t es dazu: &bdquo;... au&szlig;er dort, wo es unvermeidbar
   ist. Unter keinen Umst&auml;nden aber l&auml;nger als 80 ...&ldquo;.
</p>
<p>Benutzen Sie f&uuml;r das Formatieren keine Tabulatoren, sondern
   ausschlie&szlig;lich Leerzeichen. Tabulatorspr&uuml;nge werden bei
   unterschiedlichen Computern verschieden angezeigt, und die sorgf&auml;ltige
   Formatierung w&uuml;rde nicht immer in derselben Weise dargestellt.
</p>
<p>Oft ist es schwierig, Tabellen als reinen ASCII-Text zu formatieren. Wenn Sie
   eine nicht-proportionale Schriftart wie DPCustomMono oder Courier verwenden,
   ist es leichter. Ziel ist es, die Bedeutung zu erhalten und eine lesbare Tabelle
   in einem E-Book zu erstellen. Manchmal ist es n&ouml;tig, das urspr&uuml;ngliche
   Format der Tabelle auf der gedruckten Seite aufzugeben. Pr&uuml;fen Sie
   <a href="#comments">Projektkommentare</a> und -forum, ob sich andere Freiwillige
   auf ein bestimmtes Format verst&auml;ndigt haben. Falls dort nichts steht, finden
   Sie vielleicht n&uuml;tzliche Hinweise im Forum
   <a href="<? echo $Gallery_of_Table_Layouts_URL; ?>">Gallery of Table Layouts</a>.
</p>
<p><b>Fu&szlig;noten</b> in Tabellen geh&ouml;ren an das Ende der Tabelle. Zu
   den Einzelheiten siehe <a href="#footnotes">Fu&szlig;noten</a>.
</p>
<!-- END RR -->
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Table Example 1">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <td width="100%" valign="top"> <img src="table1.png" alt="" width="500" height="142"><br>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<pre><tt>/*
Deg. C.   Millimeters of Mercury.    Gasolene.
               Pure Benzene.

 -10&deg;               13.4                 43.5
   0&deg;               26.6                 81.0
 +10&deg;               46.6                132.0
  20&deg;               76.3                203.0
  40&deg;              182.0                301.8
*/</tt></pre>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>
<br>
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Table Example 2">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <td width="100%" valign="top"> <img src="table2.png" alt="" width="500" height="304"><br>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<pre><tt>/*
TABLE II.

-----------------------+----+-----++-------------------------+----+------
                       | C  |     ||                         |  C |
Flat strips compared   | o  |     ||                         |  o |
with round wire 30 cm. | p  |Iron.|| Parallel wires 30 cm.   |  p | Iron.
in length.             | p  |     || in length.              |  p |
                       | e  |     ||                         |  e |
                       | r  |     ||                         |  r |
                       | .  |     ||                         |  . |
-----------------------+----+-----++-------------------------+----+------
Wire 1 mm. diameter    | 20 | 100 || Wire 1 mm. diameter     | 20 |  100
-----------------------+----+-----++-------------------------+----+------
        STRIPS.        |    |     ||       SINGLE WIRE.      |    |
0.25 mm. thick, 2 mm.  |    |     ||                         |    |
  wide                 | 15 |  35 || 0.25 mm. diameter       | 16 |   48
Same, 5 mm. wide       | 13 |  20 || Two  similar wires      | 12 |   30
 "   10  "    "        | 11 |  15 || Four    "      "        |  9 |   18
 "   20  "    "        | 10 |  14 || Eight   "      "        |  8 |   10
 "   40  "    "        |  9 |  13 || Sixteen "      "        |  7 |    6
Same strip rolled up in|    |     || Same, 16 wires bound    |    |
  the form of wire     | 17 |  15 ||   close together        | 18 |   12
-----------------------+----+-----++-------------------------+----+------
*/</tt></pre>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>


<h3><a name="block_qt">Blockzitate</a></h3>
<p>Umschlie&szlig;en Sie Blockzitate mit den Markierungen <tt>/#</tt> und <tt>#/</tt>.
   Lassen Sie eine Leerzeile zwischen diesen Markierungen und dem Rest des Textes.
   Die Markierungen stellen sicher, dass Blockzitate beim Nachbearbeiten richtig
   formatiert werden.
</p>
<p>Abgesehen von den Markierungen sollten Blockzitate genauso formatiert werden
   wie jeder andere Text.
</p>
<p>Blockzitate sind lange Zitate (&uuml;blicherweise mehrere Zeilen und manchmal
   mehrere Seiten), die meistens (aber nicht immer) mit breiteren R&auml;ndern
   oder in einer kleineren Schriftart (oder beidem) gedruckt sind.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Block Quotation">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Beispielvorlage:</th></tr>
    <tr align="left">
      <td width="100%" valign="top"> <img src="bquote.png" alt="" width="500" height="475"><br>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
    <p><tt>later day was welcomed in their home on the Hudson.<br>
    Dr. Bakewell's contribution was as follows:[24]</tt></p>
    <p><tt>/#<br>
    The uncertainty as to the place of Audubon's birth has been<br>
    put to rest by the testimony of an eye witness in the person<br>
    of old Mandeville Marigny now dead some years. His repeated<br>
    statement to me was, that on his plantation at Mandeville,<br>
    Louisiana, on Lake Ponchartrain, Audubon's mother was<br>
    his guest; and while there gave birth to John James Audubon.<br>
    Marigny was present at the time, and from his own lips, I have,<br>
    as already said, repeatedly heard him assert the above fact.<br>
    He was ever proud to bear this testimony of his protection<br>
    given to Audubon's mother, and his ability to bear witness as<br>
    to the place of Audubon's birth, thus establishing the fact that<br>
    he was a Louisianian by birth.<br>
    #/<br></tt>
    </p>
    <p><tt>We do not doubt the candor and sincerity of the<br>
    excellent Dr. Bakewell, but are bound to say that the<br>
    incidents as related above betray a striking lapse of<br>
    </tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="double_q">Doppelte Anf&uuml;hrungszeichen</a></h3>
<p>Formatieren Sie diese als gew&ouml;hnliche doppelte ASCII
   <tt>"</tt>-Anf&uuml;hrungszeichen. Ersetzen Sie keine doppelten durch einfache
   Anf&uuml;hrungszeichen. Lassen Sie sie so, wie der Autor sie geschrieben hat.
</p>
<p>Bei anderen Sprachen als Englisch verwenden Sie bitte die in dieser Sprache
   &uuml;blichen Anf&uuml;hrungszeichen, sofern sie verf&uuml;gbar sind. Die
   franz&ouml;sischen Guillemets <tt>&laquo;wie hier&raquo;</tt> sind in den
   Pulldown-Men&uuml;s der Korrekturlese-Oberfl&auml;che zu finden, weil sie zum
   Latin-1-Zeichensatz geh&ouml;ren. Bitten denken Sie daran, eventuelle Leerzeichen
   zwischen den Guillemets und dem zitierten Text zu entfernen; falls sie
   ben&ouml;tigt werden, werden sie bei der Nachbearbeitung eingef&uuml;gt. Das
   gleiche gilt f&uuml;r Sprachen, die umgekehrte Guillemets <tt>&raquo;wie
   hier&laquo;</tt> verwenden.
</p>
<p>In manchen Texten (in Deutsch oder anderen Sprachen) werden Anf&uuml;hrungszeichen
   <tt>&bdquo;wie diese&rdquo;</tt> benutzt.
<? if(!$utf8_site) { ?>
   Sie sind nicht in den Pulldown-Men&uuml;s verf&uuml;gbar, weil sie nicht zum
   Latin-1-Zeichensatz geh&ouml;ren. In diesem Fall folgen Sie den Anweisungen
   in den Projektkommentaren.
<? } else { ?>
   Sie sind auch in den Pulldown-Men&uuml;s enthalten. Der Einfachheit halber sollten
   Sie immer <tt>&bdquo;</tt> und <tt>&ldquo;</tt> benutzen, egal welche
   Anf&uuml;hrungszeichen im Originaltext benutzt werden, solange diese deutlich
   erkennbar untere und obere sind. Falls erforderlich, werden die Anf&uuml;hrungszeichen
   in der Nachbearbeitung ge&auml;ndert.
<? } ?>
</p>
<p>Unter Umst&auml;nden weist Sie der Projektmanager in den
   <a href="#comments">Projektkommentaren</a> an, nicht-englische Anf&uuml;hrungszeichen
   f&uuml;r ein bestimmtes Buch abweichend zu formatieren.
</p>

<h3><a name="single_q">Einfache Anf&uuml;hrungszeichen</a></h3>
<p>Formatieren Sie diese als gew&ouml;hnliches einfaches ASCII-Anf&uuml;hrungszeichen
   <tt>'</tt> (Apostroph). Ersetzen Sie keine einfachen durch doppelte
   Anf&uuml;hrungszeichen. Lassen Sie sie so, wie der Autor sie geschrieben hat.
</p>

<h3><a name="quote_ea">Anf&uuml;hrungszeichen auf jeder Zeile</a></h3>
<p>Stehen bei Zitaten am Beginn jeder Zeile Anf&uuml;hrungszeichen, so entfernen
   Sie alle <b>mit Ausnahme</b> desjenigen in der ersten Zeile.
</p>
<p>Geht das Zitat &uuml;ber mehrere Abs&auml;tze, so sollte am Beginn eines jeden
   Absatzes ein &ouml;ffnendes Anf&uuml;hrungszeichen stehen.
</p>
<p>Oft befindet sich das schlie&szlig;ende Anf&uuml;hrungszeichen erst ganz am
   Ende des Zitates, also m&ouml;glicherweise nicht auf der Seite, die Sie gerade
   formatieren. K&uuml;mmern Sie sich nicht darum &ndash; f&uuml;gen Sie keine
   schlie&szlig;enden Anf&uuml;hrungszeichen hinzu, die nicht auf der Buchseite
   stehen.
</p>
<p>Es gibt einige sprachenspezifische Ausnahmen. Im Franz&ouml;sischen wird beispielsweise
   bei zitierten Dialogen eine Kombination von verschiedenen Anf&uuml;hrungszeichen
   benutzt, um unterschiedliche Sprecher anzuzeigen. Wenn Sie mit einer bestimmten
   Sprache nicht vertraut sind, pr&uuml;fen Sie die Projektkommentare oder hinterlassen
   Sie zur Kl&auml;rung eine Nachricht f&uuml;r den Projektmanager im Projektforum.
</p>

<h3><a name="period_s">Punkte am Ende von S&auml;tzen</a></h3>
<p>Hinter den Punkt, der einen Satz beendet, geh&ouml;rt ein einfaches Leerzeichen.
</p>
<p>Es ist nicht n&ouml;tig, zus&auml;tzliche Leerzeichen nach Punkten zu entfernen,
   wenn sie schon im OCR-Text sind &ndash; wir k&ouml;nnen dies automatisch in
   der Nachbearbeitung erledigen. Siehe Vorlage und Text zu
   <a href="#chap_head">Kapitel&uuml;berschriften</a> als Beispiel.
</p>

<h3><a name="punctuat">Satzzeichen</a></h3>
<p>Im Allgemeinen sollten keine Leerzeichen vor Satzzeichen stehen, mit Ausnahme
   von &ouml;ffnenden Anf&uuml;hrungszeichen. Falls im OCR-Text ein Leerzeichen
   vor dem Satzzeichen steht, so entfernen Sie es. Das gilt auch f&uuml;r Sprachen
   wie Franz&ouml;sisch, die normalerweise Leerzeichen vor Satzzeichen benutzen.
</p>
<p>Leerzeichen vor Satzzeichen kommen bei alten B&uuml;chern manchmal vor, weil im 18.
   und 19. Jahrhundert vor z. B. Semikolon oder Komma oft &bdquo;Teil-Leerzeichen&ldquo;
   gesetzt wurden.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1"  cellpadding="4" cellspacing="0" summary="Punctuation">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Gescannter Text:</th></tr>
    <tr>
      <td valign="top">and so it goes&nbsp;; ever and ever.</td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td valign="top"><tt>and so it goes; ever and ever.</tt></td>
    </tr>
  </tbody>
</table>

<h3><a name="line_br">Zeilenumbr&uuml;che</a></h3>
<p><b>Lassen Sie alle Zeilenumbr&uuml;che stehen</b>, damit der n&auml;chste
   Formatierer und der Nachbearbeiter die Zeilen im Text bequem mit den Zeilen
   in der Vorlage vergleichen k&ouml;nnen. Seien Sie dabei besonders vorsichtig,
   wenn Sie <a href="#eol_hyphen">getrennte W&ouml;rter</a> wieder zusammenf&uuml;gen
   oder W&ouml;rter um <a href="#em_dashes">Gedankenstriche</a> bewegen. Sollte der
   vorhergehende Freiwillige die Zeilenumbr&uuml;che entfernt haben, setzen Sie diese
   bitte wieder so ein, dass sie der Vorlage entsprechen.
</p>
<p>Zus&auml;tzliche Leerzeilen, die nicht auf der Vorlage sind, sollten entfernt
   werden, au&szlig;er dort, wo wir sie absichtlich f&uuml;r die Formatierung
   einf&uuml;gen. Leerzeilen am Ende der Seite sind in Ordnung &ndash; sie werden
   beim Speichern der Seite automatisch entfernt.
</p>

<!-- END RR -->
<!-- We should have an example right here for this. -->

<h3><a name="extra_sp">&Uuml;berfl&uuml;ssige Leerzeichen bzw. Tabulatoren zwischen
    W&ouml;rtern</a></h3>
<p>Die Texterkennung verursacht oft &uuml;berfl&uuml;ssige Leerzeichen und Tabulatoren
   im Text. Sie brauchen sich nicht die M&uuml;he zu machen, diese Leerzeichen
   zu entfernen &ndash; das kann automatisch in der Nachbearbeitung erfolgen.
</p>
<p>&Uuml;berfl&uuml;ssige Leerzeichen um Satzzeichen, Gedankenstriche,
   Anf&uuml;hrungszeichen herum usw. <b>m&uuml;ssen</b> jedoch entfernt werden, wenn
   sie das Symbol vom Wort trennen.
</p>
<p>Im folgenden Beispiel: <tt>A horse&nbsp;;&nbsp;&nbsp;my kingdom for a horse.</tt>
   muss das Leerzeichen zwischen &bdquo;horse&ldquo;; und dem Semikolon entfernt
   werden. Die zwei Leerzeichen nach dem Semikolon sind in Ordnung &ndash; Sie
   brauchen keines der beiden zu l&ouml;schen.
</p>

<h3><a name="trail_s">Leerzeichen am Zeilenende</a></h3>
<p>Verschwenden Sie keine Zeit damit, Leerzeichen am Ende jeder Zeile einzuf&uuml;gen.
   Das kann sp&auml;ter automatisch erledigt werden. Es ist auch nicht n&ouml;tig,
   &uuml;berfl&uuml;ssige Leerzeichen am Zeilenende zu entfernen.
</p>

<h3><a name="line_no">Zeilennummern</a></h3>
<p>Zeilennummern werden beibehalten. Stellen Sie diese an das rechte Ende der Zeile,
   auch wenn die Zeilennummern in der Vorlage links vom Gedicht/Text stehen. Lassen
   Sie mindestens 6 Leerzeichen zwischen dem Text und der Zeilennummer.
</p>
<p>Zeilennummern, die am Seitenrand in jeder oder auch nur jeder f&uuml;nften
   oder zehnten Zeile stehen, sind vor allem in Gedichtb&auml;nden &uuml;blich.
   Da der Text von Gedichten f&uuml;r das E-Book nicht neu formatiert wird, sind
   die Zeilennummern auch f&uuml;r den Leser von Interesse.
</p>
<!-- END RR -->
<!-- We need an example image and text for this. -->

<h3><a name="extra_s">Zus&auml;tzliche(r) Abstand/Sternchen/Zeilen zwischen Abs&auml;tzen</a></h3>
<p>Die meisten Abs&auml;tze beginnen direkt in der Zeile nach dem Ende des
   vorhergehenden Absatzes. Manchmal sind zwei Abs&auml;tze getrennt, um einen
   &bdquo;Gedankenwechsel&ldquo; (thought break, tb) anzuzeigen. Ein Gedankenwechsel
   kann die Form einer Reihe von Sternchen, Strichen oder anderen Zeichen haben, einer
   einfachen oder blumig verzierten waagerechten Linie, einer einfachen Verzierung
   oder auch nur einer oder zwei zus&auml;tzlicher Leerzeilen.
</p>
<p>Ein Gedankenwechsel kann einen Szenen- oder Themenwechsel, einen Sprung in
   der Zeit oder Spannung anzeigen. Das ist vom Autor gewollt, also behalten wir
   es bei, indem wir eine Leerzeile, <tt>&lt;tb&gt;</tt> und eine weitere Leerzeile
   einf&uuml;gen.
</p>
<p>Projektmanager und/oder Nachbearbeiter k&ouml;nnen verlangen, dass zus&auml;tzliche
   Informationen in die tb-Markierung mit aufgenommen werden. Beispielsweise unterscheiden
   einige Projekte verschiedene Arten von tbs durch verschiedene Markierungen,
   etwa eine Reihe von Sternchen an einer Stelle und eine Leerzeile an einer anderen.
   In diesem Fall k&ouml;nnen die Projektkommentare verlangen, dass diese mit <tt>&lt;tb
   stars&gt;</tt> und <tt>&lt;tb&gt;</tt> zu markieren sind. Lesen Sie bitte aufmerksam
   die Projektkommentare wie immer, damit Sie wissen, was im jeweiligen Projekt
   verlangt wird. Achten Sie auch darauf, dass Sie diese besonderen Erfordernisse
   nicht auf ein Projekt mit anderen Anforderungen &uuml;bertragen.
</p>
<p>Von Druckern wurden manchmal dekorative Linien verwendet, um das Ende von Kapiteln
   anzuzeigen. Da wir bereits <a href="#chap_head">Kapitel&uuml;berschriften</a>
   markieren, braucht die tb-Markierung daf&uuml;r nicht eingef&uuml;gt zu werden.
</p>
<p>Die &lt;tb&gt;-Markierung ist in der Korrekturlese-Oberfl&auml;che zum Kopieren
   und Einf&uuml;gen verf&uuml;gbar.
</p>
<!-- END RR -->
<br>
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Thought Break">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk"> Beispielvorlage:</th></tr>
    <tr align="left">
      <td width="100%" valign="top"> <img src="tbreak.png" alt="thought break"
          width="500" height="264"> <br>
      </td>
    </tr>
    <tr><th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th></tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
    <p><tt>
    like the gentleman with the spiritual hydrophobia<br>
    in the latter end of Uncle Tom's Cabin.<br>
    Unconsciously Mr. Dixon has done his best to<br>
    prove that Legree was not a fictitious character.</tt>
    </p>
    <p><tt>&lt;tb&gt;</tt>
    </p>
    <p><tt>
    Joel Chandler Harris, Harry Stillwell Edwards,<br>
    George W. Cable, Thomas Nelson Page,<br>
    James Lane Allen, and Mark Twain are Southern<br>
    men in Mr. Griffith's class. I recommend</tt>
    </p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>


<h3><a name="period_p">Auslassungspunkte &bdquo;...&ldquo; (Ellipse)</a></h3>
<p>Die Richtlinien f&uuml;r Englisch und f&uuml;r andere Sprachen (LOTE, Languages
   Other Than English) sind unterschiedlich. </p>
<p><b>ENGLISCH</b>: Lassen Sie ein Leerzeichen vor den drei Punkten und eines
   danach. Die Ausnahme ist das Satzende: hier steht nach dem letzten Wort kein
   Leerzeichen, dann vier Punkte und danach ein Leerzeichen. Dasselbe gilt auch
   f&uuml;r andere Satzendzeichen: die drei Punkte folgen unmittelbar, ohne jedes
   Leerzeichen.
</p>
<p>Zum Beispiel:<br>
   <tt>
   <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;That I know ... is true.
   <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is the end....
   <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wherefore art thou Romeo?...
   </tt>
</p>
<p>Manchmal steht das Satzzeichen auch erst nach der Ellipse. In diesem Fall formatieren
   Sie so:<br>
   <tt>
   <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wherefore art thou Romeo...?
   </tt>
</p>
<p>Entfernen Sie vorhandene &uuml;berfl&uuml;ssige Punkte und erg&auml;nzen Sie
   falls n&ouml;tig fehlende, um immer die erforderlichen drei (oder vier) Punkte
   zu erhalten.
</p>
<p><b>LOTE (Languages Other Than English):</b> Hier gilt die allgemeine Regel:
   &bdquo;Halten Sie sich so nah wie m&ouml;glich an die gedruckte Seite&ldquo;.
   F&uuml;gen Sie also Leerzeichen ein, wenn sie vor oder zwischen den Punkten
   vorhanden sind, und verwenden Sie die gleiche Zahl von Punkten wie auf der Vorlage.
   Manchmal ist das auf der gedruckten Seite nicht deutlich zu erkennen; in diesem
   Fall f&uuml;gen Sie ein <tt>[**unclear]</tt> ein, um den Nachbearbeiter auf
   die Stelle aufmerksam zu machen. (Anmerkung: Nachbearbeiter sollten diese
   regul&auml;ren Leerzeichen durch gesch&uuml;tzte Leerzeichen ersetzen.)
</p>

<h3><a name="a_chars">Akzente und nicht-ASCII-Zeichen</a></h3>
<? if(!$utf8_site) { ?>
<p>Bitte formatieren Sie diese, indem Sie die entsprechenden Zeichen des Latin-1-Zeichensatzes
   verwenden, wo dies m&ouml;glich ist. Die korrekte Formatierung f&uuml;r Nicht-Latin-1-Zeichen
   finden Sie unter <a href="#d_chars">Buchstaben mit diakritischen Zeichen</a>.
</p>
<? } else { ?>
<p>Bitte formatieren Sie diese, indem Sie die richtigen UTF-8 Zeichen verwenden.
   F&uuml;r Zeichen, die nicht in Unicode sind, gelten die Anweisungen des
   Projektmanagers in den <a href="#comments">Projektkommentaren</a>.
</p>
<? } ?>
<p>Sind diese Zeichen nicht auf Ihrer Tastatur, so gibt es mehrere M&ouml;glichkeiten
   zur Eingabe:
</p>
<ul compact>
  <li>Die Pulldown-Men&uuml;s in der Korrekturlese-Oberfl&auml;che.</li>
  <li>Applets, die im Betriebssystem Ihres Computers enthalten sind.
      <ul compact>
      <li>Windows: &sbquo;Zeichentabelle&lsquo;<br>
          Zugriff haben Sie mit:<br>
          Start -&gt; Ausf&uuml;hren -&gt; charmap bzw.<br>
          Start -&gt; Programme -&gt; Zubeh&ouml;r -&gt; Systemprogramme -&gt;
          Zeichentabelle</li>
      <li>Macintosh: &sbquo;Tastatur&lsquo; oder &sbquo;Tastatur&uuml;bersicht&lsquo;<br>
          Bis OS 9 findet man es im Apple-Men&uuml;;<br>
          unter OS X bis 10.2 im Ordner &sbquo;Anwendungen, Werkzeuge&lsquo;.<br>
          ab OS X 10.3 im Input-Men&uuml; als &sbquo;Tastatur&uuml;bersicht&lsquo;.</li>
      <li>Linux: Verschiedene, abh&auml;ngig von der Arbeitsumgebung.<br>
          Unter KDE k&ouml;nnen Sie KCharSelect (im Untermen&uuml;
          &sbquo;Dienstprogramme&lsquo; des Startmen&uuml;s) ausprobieren.</li>
      </ul>
  </li>
  <li>Mit einem Online-Programm, wie zum Beispiel <a
     href="http://free.pages.at/krauss/computer/xml/daten/edicode.html">Edicode</a>.</li>
  <li>Tastenk&uuml;rzel<br>
      (Tabellen f&uuml;r <a href="#a_chars_win">Windows</a> und
      <a href="#a_chars_mac">Macintosh</a> finden Sie weiter unten in diesem Dokument.)</li>
  <li>Durch Umschalten auf ein Tastaturlayout oder eine andere Landeseinstellung,
      die Akzente als Tottasten unterst&uuml;tzt.
    <ul compact>
       <li>Windows: Systemsteuerung (Regions- und Sprachoptionen)</li>
       <li>Macintosh: Inputmen&uuml; (in der Men&uuml;leiste)</li>
       <li>Linux: Einstellen der Tastatur in der X-Konfiguration.</li>
    </ul>
  </li>
</ul>
<p>Von <a href="http://www.gutenberg.org">Project Gutenberg</a> wird als
   Minimalvariante eine 7-Bit-ASCII-Version des Textes ver&ouml;ffentlicht. Es werden
   jedoch auch Versionen in anderen Zeichens&auml;tzen akzeptiert, durch die mehr
   Informationen des Originals erhalten bleiben. <a href="http://pge.rastko.net">Project
   Gutenberg Europe</a> ver&ouml;ffentlicht UTF-8 als Standard-Zeichensatz; andere
   angemessene Zeichens&auml;tze sind dort ebenfalls willkommen.
</p>
<p>Gegenw&auml;rtig bedeutet das f&uuml;r <a href="http://www.pgdp.net/">Distributed
   Proofreaders</a>, dass Latin-1, ISO 8859-1 und -15 verwendet werden. In der
   Zukunft wird auch Unicode m&ouml;glich sein.
</p>
<p><a href="http://dp.rastko.net/">Distributed Proofreaders Europe</a> benutzt
   bereits Unicode.
</p>
<!-- END RR -->
<a name="a_chars_win"></a>
<p><b>F&uuml;r Windows</b>:
</p>
<ul compact>
  <li>das Programm &sbquo;Zeichentabelle&lsquo; (Start -&gt; Ausf&uuml;hren -&gt;
      charmap), dann Ausschneiden (Strg-X) und Einf&uuml;gen (Strg-V)
  </li>
  <li>die Pulldown-Men&uuml;s in der Korrekturlese-Oberfl&auml;che
  </li>
  <li>oder die Tastenkombination &sbquo;Alt+Zifferntasten&lsquo; als
      K&uuml;rzel f&uuml;r einzelne Zeichen.<br>
      Diese Methode ist schneller als Ausschneiden und Einf&uuml;gen,
      wenn Sie sich einmal an die Codes gew&ouml;hnt haben.<br>
      Halten Sie dazu die &sbquo;Alt&lsquo;-Taste gedr&uuml;ckt und
      geben Sie die vier Ziffern am <i>Ziffernblock</i> der Tastatur ein
      &ndash; die Ziffernreihe &uuml;ber den Buchstaben funktioniert nicht.<br>
      Sie m&uuml;ssen alle vier Stellen eingeben, einschlie&szlig;lich
      der f&uuml;hrenden 0 (Null). Beachten Sie, dass der Gro&szlig;buchstabe
      immer um 32 kleiner ist als der entsprechende Kleinbuchstabe.<br>
      Diese Anweisungen gelten f&uuml;r das US-englische Tastaturlayout.
      M&ouml;glicherweise funktionieren sie nicht unter anderen Layouts.<br>
      Die Tabelle unten zeigt die zu verwendenden Codes.
      (<a href="charwin.pdf">Druckversion der Tabelle</a>)<br>
      Verwenden Sie keine anderen Sonderzeichen, es sei denn, der Projektmanager
      weist das in den <a href="#comments">Projektkommentaren</a> ausdr&uuml;cklich an.
  </li>
</ul>

<br>
<table align="center" border="6" rules="all" summary="Windows shortcuts">
  <tbody>
  <tr>
      <th bgcolor="cornsilk" colspan=14>Windows-Tastenk&uuml;rzel f&uuml;r Latin-1-Symbole</th>
  </tr>
  <tr bgcolor="cornsilk">
      <th colspan=2>` Gravis</th>
      <th colspan=2>&acute; Akut (aigu)</th>
      <th colspan=2>^ Zirkumflex</th>
      <th colspan=2>~ Tilde</th>
      <th colspan=2>&uml; Umlaut/Trema</th>
      <th colspan=2>&deg; Ring</th>
      <th colspan=2>&AElig;-Ligatur</th>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small a grave"         >&agrave; </td><td>Alt-0224</td>
      <td align="center" bgcolor="mistyrose" title="Small a acute"         >&aacute; </td><td>Alt-0225</td>
      <td align="center" bgcolor="mistyrose" title="Small a circumflex"    >&acirc;  </td><td>Alt-0226</td>
      <td align="center" bgcolor="mistyrose" title="Small a tilde"         >&atilde; </td><td>Alt-0227</td>
      <td align="center" bgcolor="mistyrose" title="Small a umlaut"        >&auml;   </td><td>Alt-0228</td>
      <td align="center" bgcolor="mistyrose" title="Small a ring"          >&aring;  </td><td>Alt-0229</td>
      <td align="center" bgcolor="mistyrose" title="Small ae ligature"     >&aelig;  </td><td>Alt-0230</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital A grave"       >&Agrave; </td><td>Alt-0192</td>
      <td align="center" bgcolor="mistyrose" title="Capital A acute"       >&Aacute; </td><td>Alt-0193</td>
      <td align="center" bgcolor="mistyrose" title="Capital A circumflex"  >&Acirc;  </td><td>Alt-0194</td>
      <td align="center" bgcolor="mistyrose" title="Capital A tilde"       >&Atilde; </td><td>Alt-0195</td>
      <td align="center" bgcolor="mistyrose" title="Capital A umlaut"      >&Auml;   </td><td>Alt-0196</td>
      <td align="center" bgcolor="mistyrose" title="Capital A ring"        >&Aring;  </td><td>Alt-0197</td>
      <td align="center" bgcolor="mistyrose" title="Capital AE ligature"   >&AElig;  </td><td>Alt-0198</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small e grave"         >&egrave; </td><td>Alt-0232</td>
      <td align="center" bgcolor="mistyrose" title="Small e acute"         >&eacute; </td><td>Alt-0233</td>
      <td align="center" bgcolor="mistyrose" title="Small e circumflex"    >&ecirc;  </td><td>Alt-0234</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small e umlaut"        >&euml;   </td><td>Alt-0235</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital E grave"       >&Egrave; </td><td>Alt-0200</td>
      <td align="center" bgcolor="mistyrose" title="Capital E acute"       >&Eacute; </td><td>Alt-0201</td>
      <td align="center" bgcolor="mistyrose" title="Capital E circumflex"  >&Ecirc;  </td><td>Alt-0202</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital E umlaut"      >&Euml;   </td><td>Alt-0203</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small i grave"         >&igrave; </td><td>Alt-0236</td>
      <td align="center" bgcolor="mistyrose" title="Small i acute"         >&iacute; </td><td>Alt-0237</td>
      <td align="center" bgcolor="mistyrose" title="Small i circumflex"    >&icirc;  </td><td>Alt-0238</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small i umlaut"        >&iuml;   </td><td>Alt-0239</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital I grave"       >&Igrave; </td><td>Alt-0204</td>
      <td align="center" bgcolor="mistyrose" title="Capital I acute"       >&Iacute; </td><td>Alt-0205</td>
      <td align="center" bgcolor="mistyrose" title="Capital I circumflex"  >&Icirc;  </td><td>Alt-0206</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital I umlaut"      >&Iuml;   </td><td>Alt-0207</td>
      <th colspan=2 bgcolor="cornsilk">/ Schr&auml;gstrich</th>
      <th colspan=2 bgcolor="cornsilk">&OElig;-Ligatur</th>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small o grave"         >&ograve; </td><td>Alt-0242</td>
      <td align="center" bgcolor="mistyrose" title="Small o acute"         >&oacute; </td><td>Alt-0243</td>
      <td align="center" bgcolor="mistyrose" title="Small o circumflex"    >&ocirc;  </td><td>Alt-0244</td>
      <td align="center" bgcolor="mistyrose" title="Small o tilde"         >&otilde; </td><td>Alt-0245</td>
      <td align="center" bgcolor="mistyrose" title="Small o umlaut"        >&ouml;   </td><td>Alt-0246</td>
      <td align="center" bgcolor="mistyrose" title="Small o slash"         >&oslash; </td><td>Alt-0248</td>
      <td align="center" bgcolor="mistyrose" title="Small oe ligature"     >&oelig;  </td><td>
<? if(!$utf8_site) { ?>
  [oe] verw.
<? } else { ?>
  Alt-0156
<? } ?>
      </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital O grave"       >&Ograve; </td><td>Alt-0210</td>
      <td align="center" bgcolor="mistyrose" title="Capital O acute"       >&Oacute; </td><td>Alt-0211</td>
      <td align="center" bgcolor="mistyrose" title="Capital O circumflex"  >&Ocirc;  </td><td>Alt-0212</td>
      <td align="center" bgcolor="mistyrose" title="Capital O tilde"       >&Otilde; </td><td>Alt-0213</td>
      <td align="center" bgcolor="mistyrose" title="Capital O umlaut"      >&Ouml;   </td><td>Alt-0214</td>
      <td align="center" bgcolor="mistyrose" title="Capital O slash"       >&Oslash; </td><td>Alt-0216</td>
      <td align="center" bgcolor="mistyrose" title="Capital OE ligature"   >&OElig;  </td><td>
<? if(!$utf8_site) { ?>
  [OE] verw.
<? } else { ?>
  Alt-0140
<? } ?>
      </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small u grave"         >&ugrave; </td><td>Alt-0249</td>
      <td align="center" bgcolor="mistyrose" title="Small u acute"         >&uacute; </td><td>Alt-0250</td>
      <td align="center" bgcolor="mistyrose" title="Small u circumflex"    >&ucirc;  </td><td>Alt-0251</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small u umlaut"        >&uuml;   </td><td>Alt-0252</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital U grave"       >&Ugrave; </td><td>Alt-0217</td>
      <td align="center" bgcolor="mistyrose" title="Capital U acute"       >&Uacute; </td><td>Alt-0218</td>
      <td align="center" bgcolor="mistyrose" title="Capital U circumflex"  >&Ucirc;  </td><td>Alt-0219</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital U umlaut"      >&Uuml;   </td><td>Alt-0220</td>
      <th colspan=2 bgcolor="cornsilk">W&auml;hrungen</th>
      <th colspan=2 bgcolor="cornsilk">Mathematik</th>
  </tr>
  <tr><td> </td><td> </td>
      <td> </td><td> </td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small n tilde"         >&ntilde; </td><td>Alt-0241</td>
      <td align="center" bgcolor="mistyrose" title="Small y umlaut"        >&yuml;   </td><td>Alt-0255</td>
      <td align="center" bgcolor="mistyrose" title="Cents"                 >&cent;   </td><td>Alt-0162</td>
      <td align="center" bgcolor="mistyrose" title="plus/minus"            >&plusmn; </td><td>Alt-0177</td>
  </tr>
  <tr><td> </td><td> </td>
      <td> </td><td> </td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital N tilde"       >&Ntilde; </td><td>Alt-0209</td>
      <td align="center" bgcolor="mistyrose" title=""></td><td></td>
      <td align="center" bgcolor="mistyrose" title="Pounds"                >&pound;  </td><td>Alt-0163</td>
      <td align="center" bgcolor="mistyrose" title="Multiplication"        >&times;  </td><td>Alt-0215</td>
  </tr>
  <tr><th colspan=2 bgcolor="cornsilk">Cedille </th>
      <th colspan=2 bgcolor="cornsilk">Isl&auml;ndisch </th>
      <th colspan=2 bgcolor="cornsilk">Symbole    </th>
      <th colspan=2 bgcolor="cornsilk">Akzente     </th>
      <th colspan=2 bgcolor="cornsilk">Satzzeichen </th>
      <td align="center" bgcolor="mistyrose" title="Yen"                   >&yen;    </td><td>Alt-0165</td>
      <td align="center" bgcolor="mistyrose" title="Division"              >&divide; </td><td>Alt-0247</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small c cedilla"       >&ccedil; </td><td>Alt-0231</td>
      <td align="center" bgcolor="mistyrose" title="Capital Thorn"         >&THORN;  </td><td>Alt-0222</td>
      <td align="center" bgcolor="mistyrose" title="Copyright"             >&copy;   </td><td>Alt-0169</td>
      <td align="center" bgcolor="mistyrose" title="acute accent"          >&acute;  </td><td>Alt-0180</td>
      <td align="center" bgcolor="mistyrose" title="Inverted Question Mark">&iquest; </td><td>Alt-0191</td>
      <td align="center" bgcolor="mistyrose" title="Dollars"               >$   </td><td>Alt-0036</td>
      <td align="center" bgcolor="mistyrose" title="Logical Not"           >&not;    </td><td>Alt-0172</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital C cedilla"     >&Ccedil; </td><td>Alt-0199</td>
      <td align="center" bgcolor="mistyrose" title="Small thorn"           >&thorn;  </td><td>Alt-0254</td>
      <td align="center" bgcolor="mistyrose" title="Registration Mark"     >&reg;    </td><td>Alt-0174</td>
      <td align="center" bgcolor="mistyrose" title="umlaut accent"         >&uml;    </td><td>Alt-0168</td>
      <td align="center" bgcolor="mistyrose" title="Inverted Exclamation"  >&iexcl;  </td><td>Alt-0161</td>
      <td align="center" bgcolor="mistyrose" title="General Currency"      >&curren; </td><td>Alt-0164</td>
      <td align="center" bgcolor="mistyrose" title="Degrees"               >&deg;    </td><td>Alt-0176</td>
  </tr>
  <tr><th colspan=2 bgcolor="cornsilk">Hochzahlen        </th>
      <td align="center" bgcolor="mistyrose" title="Capital Eth"           >&ETH;    </td><td>Alt-0208</td>
      <td align="center" bgcolor="mistyrose" title="Trademark"             >&trade;  </td><td>Alt-0153</td>
      <td align="center" bgcolor="mistyrose" title="macron accent"         >&macr;   </td><td>Alt-0175</td>
      <td align="center" bgcolor="mistyrose" title="guillemot left"        >&laquo;  </td><td>Alt-0171</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Micro"                 >&micro;  </td><td>Alt-0181</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="superscript 1"         >&sup1;   </td><td>Alt-0185</td>
      <td align="center" bgcolor="mistyrose" title="Small eth"             >&eth;    </td><td>Alt-0240</td>
      <td align="center" bgcolor="mistyrose" title="Paragraph (pilcrow)"   >&para;   </td><td>Alt-0182</td>
      <td align="center" bgcolor="mistyrose" title="cedilla"               >&cedil;  </td><td>Alt-0184</td>
      <td align="center" bgcolor="mistyrose" title="guillemot right"       >&raquo;  </td><td>Alt-0187</td>
      <th colspan=2 bgcolor="cornsilk">Ordnungszeichen</th>
      <td align="center" bgcolor="mistyrose" title="1/4 Fraction"          >&frac14; <sup><small>1</small></sup></td><td>Alt-0188</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="superscript 2"         >&sup2;   </td><td>Alt-0178</td>
      <th colspan=2 bgcolor="cornsilk">sz-Ligatur        </th>
      <td align="center" bgcolor="mistyrose" title="Section"               >&sect;   </td><td>Alt-0167</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Middle dot"            >&middot; </td><td>Alt-0183</td>
      <td align="center" bgcolor="mistyrose" title="Masculine Ordinal"     >&ordm;   </td><td>Alt-0186</td>
      <td align="center" bgcolor="mistyrose" title="1/2 Fraction"          >&frac12; <sup><small>1</small></sup></td><td>Alt-0189</td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="superscript 3"         >&sup3;   </td><td>Alt-0179</td>
      <td align="center" bgcolor="mistyrose" title="sz ligature"           >&szlig;  </td><td>Alt-0223</td>
      <td align="center" bgcolor="mistyrose" title="Broken Vertical bar"   >&brvbar; </td><td>Alt-0166</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="asterisk"              >*   </td><td>Alt-0042</td>
      <td align="center" bgcolor="mistyrose" title="Feminine Ordinal"      >&ordf;   </td><td>Alt-0170</td>
      <td align="center" bgcolor="mistyrose" title="3/4 Fraction"          >&frac34; <sup><small>1</small></sup></td><td>Alt-0190</td>
  </tr>
  </tbody>
</table>
<p><sup><small>1</small></sup>Wenn es in den <a href="#comments">Projektkommentaren</a>
   nicht ausdr&uuml;cklich verlangt wird, verwenden Sie bitte keine Bruch-Symbole,
   sondern die Regeln f&uuml;r <a href="#fract_s">Br&uuml;che</a> (1/2, 1/4, 3/4,
   usw.).</p>

<p><b>F&uuml;r Apple Macintosh</b>:
</p>
<ul compact>
  <li>Sie k&ouml;nnen das &sbquo;Tastatur&lsquo;-Programm als Referenz verwenden.<br>
      Bis OS 9 findet man es im Apple-Men&uuml;; unter OS X bis 10.2 im Ordner
      &sbquo;Anwendungen, Werkzeuge&lsquo;.<br>
      Ein Bild der Tastatur erscheint. Bei Dr&uuml;cken der Umschalt-, Wahl- oder
      Befehlstaste bzw. beliebigen Kombinationen wird angezeigt, wie die einzelnen
      Zeichen erzeugt werden. Anhand des Bildes k&ouml;nnen Sie sehen, wie Sie ein
      Zeichen eintippen. Sie k&ouml;nnen das Zeichen aber auch durch Ausschneiden
      und Einf&uuml;gen in die Korrekturlese-Oberfl&auml;che &uuml;bernehmen.</li>
  <li>Ab OS X 10.3 erf&uuml;llt diese Funktion eine Palette, die &uuml;ber das
      Tastaturmen&uuml; verf&uuml;gbar ist (das Pulldown-Men&uuml;, das mit dem
      Flaggen-Symbol der Landeseinstellungen in der Men&uuml;leiste verbunden ist).
      Sie ist mit &sbquo;Tastatur&uuml;bersicht einblenden&lsquo; bezeichnet. Befindet
      sie sich nicht in Ihrem Tastaturmen&uuml; oder haben Sie kein solches Men&uuml;,
      k&ouml;nnen Sie es aktivieren, indem Sie die Systemeinstellungen &ouml;ffnen
      und auf &sbquo;Landeseinstellungen&lsquo; klicken. Vergewissern Sie sich,
      dass &sbquo;Tastatur&uuml;bersicht in der Men&uuml;leiste anzeigen&lsquo;
      mit einem H&auml;kchen versehen ist. In der Spreadsheet-Ansicht markieren
      Sie &sbquo;Tastatur&uuml;bersicht&lsquo; zus&auml;tzlich zu etwaigen Landeseinstellungen,
      die Sie benutzen.
  </li>
  <li>die Pulldown-Men&uuml;s in der Korrekturlese-Oberfl&auml;che
  </li>
  <li>Oder Sie geben einfach das Apple-Wahltasten-Tastenk&uuml;rzel f&uuml;r das
      ben&ouml;tigte Zeichen ein.
      <br>Diese Methode ist viel schneller als &bdquo;Ausschneiden &amp;
          Einf&uuml;gen&ldquo;, wenn Sie sich einmal an die Codes gew&ouml;hnt haben.
      <br>Halten Sie dazu die Wahltaste gedr&uuml;ckt und geben Sie zuerst den Akzent
          und dann den Buchstaben ein. F&uuml;r manche Symbole m&uuml;ssen Sie lediglich
          die Wahltaste und das Symbol gleichzeitig dr&uuml;cken.
      <br>Diese Anweisungen gelten f&uuml;r das US-englische Tastaturlayout.
          M&ouml;glicherweise funktionieren sie nicht unter anderen Layouts.
      <br>Die Tabelle unten zeigt die zu verwendenden Codes. (<a href="charapp.pdf">Druckversion
          der Tabelle</a>)
      <br>Verwenden Sie keine anderen Sonderzeichen, es sei denn, der Projektmanager
          weist das in den <a href="#comments">Projektkommentaren</a> ausdr&uuml;cklich
          an.
  </li>
</ul>

<br>
<a name="a_chars_mac"></a>
<table align="center" border="6" rules="all" summary="Mac shortcuts">
  <tbody>
  <tr bgcolor="cornsilk"  >
      <th colspan=14>Apple-Mac-Tastenk&uuml;rzel f&uuml;r Latin-1-Symbole</th>
  <tr bgcolor="cornsilk"  >
      <th colspan=2>` Gravis</th>
      <th colspan=2>&acute; Akut (aigu)</th>
      <th colspan=2>^ Zirkumflex</th>
      <th colspan=2>~ Tilde</th>
      <th colspan=2>&uml; Umlaut/Trema</th>
      <th colspan=2>&deg; Ring</th>
      <th colspan=2>&AElig;-Ligatur</th>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small a grave"         >&agrave; </td><td>Opt-`, a</td>
      <td align="center" bgcolor="mistyrose" title="Small a acute"         >&aacute; </td><td>Opt-e, a</td>
      <td align="center" bgcolor="mistyrose" title="Small a circumflex"    >&acirc;  </td><td>Opt-i, a</td>
      <td align="center" bgcolor="mistyrose" title="Small a tilde"         >&atilde; </td><td>Opt-n, a</td>
      <td align="center" bgcolor="mistyrose" title="Small a umlaut"        >&auml;   </td><td>Opt-u, a</td>
      <td align="center" bgcolor="mistyrose" title="Small a ring"          >&aring;  </td><td>Opt-a   </td>
      <td align="center" bgcolor="mistyrose" title="Small ae ligature"     >&aelig;  </td><td>Opt-'   </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital A grave"       >&Agrave; </td><td>Opt-`, A</td>
      <td align="center" bgcolor="mistyrose" title="Capital A acute"       >&Aacute; </td><td>Opt-e, A</td>
      <td align="center" bgcolor="mistyrose" title="Capital A circumflex"  >&Acirc;  </td><td>Opt-i, A</td>
      <td align="center" bgcolor="mistyrose" title="Capital A tilde"       >&Atilde; </td><td>Opt-n, A</td>
      <td align="center" bgcolor="mistyrose" title="Capital A umlaut"      >&Auml;   </td><td>Opt-u, A</td>
      <td align="center" bgcolor="mistyrose" title="Capital A ring"        >&Aring;  </td><td>Opt-A   </td>
      <td align="center" bgcolor="mistyrose" title="Capital AE ligature"   >&AElig;  </td><td>Opt-"   </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small e grave"         >&egrave; </td><td>Opt-`, e</td>
      <td align="center" bgcolor="mistyrose" title="Small e acute"         >&eacute; </td><td>Opt-e, e</td>
      <td align="center" bgcolor="mistyrose" title="Small e circumflex"    >&ecirc;  </td><td>Opt-i, e</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small e umlaut"        >&euml;   </td><td>Opt-u, e</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital E grave"       >&Egrave; </td><td>Opt-`, E</td>
      <td align="center" bgcolor="mistyrose" title="Capital E acute"       >&Eacute; </td><td>Opt-e, E</td>
      <td align="center" bgcolor="mistyrose" title="Capital E circumflex"  >&Ecirc;  </td><td>Opt-i, E</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital E umlaut"      >&Euml;   </td><td>Opt-u, E</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small i grave"         >&igrave; </td><td>Opt-`, i</td>
      <td align="center" bgcolor="mistyrose" title="Small i acute"         >&iacute; </td><td>Opt-e, i</td>
      <td align="center" bgcolor="mistyrose" title="Small i circumflex"    >&icirc;  </td><td>Opt-i, i</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small i umlaut"        >&iuml;   </td><td>Opt-u, i</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital I grave"       >&Igrave; </td><td>Opt-`, I</td>
      <td align="center" bgcolor="mistyrose" title="Capital I acute"       >&Iacute; </td><td>Opt-e, I</td>
      <td align="center" bgcolor="mistyrose" title="Capital I circumflex"  >&Icirc;  </td><td>Opt-i, I</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital I umlaut"      >&Iuml;   </td><td>Opt-u, I</td>
      <th colspan=2 bgcolor="cornsilk">/ Schr&auml;gstrich</th>
      <th colspan=2 bgcolor="cornsilk">&OElig;-Ligatur</th>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small o grave"         >&ograve; </td><td>Opt-`, o</td>
      <td align="center" bgcolor="mistyrose" title="Small o acute"         >&oacute; </td><td>Opt-e, o</td>
      <td align="center" bgcolor="mistyrose" title="Small o circumflex"    >&ocirc;  </td><td>Opt-i, o</td>
      <td align="center" bgcolor="mistyrose" title="Small o tilde"         >&otilde; </td><td>Opt-n, o</td>
      <td align="center" bgcolor="mistyrose" title="Small o umlaut"        >&ouml;   </td><td>Opt-u, o</td>
      <td align="center" bgcolor="mistyrose" title="Small o slash"         >&oslash; </td><td>Opt-o   </td>
      <td align="center" bgcolor="mistyrose" title="Small oe ligature"     >&oelig;  </td><td>
<? if(!$utf8_site) { ?>
  [oe] verw.
<? } else { ?>
  Opt-q
<? } ?>
      </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital O grave"       >&Ograve; </td><td>Opt-`, O</td>
      <td align="center" bgcolor="mistyrose" title="Capital O acute"       >&Oacute; </td><td>Opt-e, O</td>
      <td align="center" bgcolor="mistyrose" title="Capital I circumflex"  >&Ocirc;  </td><td>Opt-i, O</td>
      <td align="center" bgcolor="mistyrose" title="Capital O tilde"       >&Otilde; </td><td>Opt-n, O</td>
      <td align="center" bgcolor="mistyrose" title="Capital O umlaut"      >&Ouml;   </td><td>Opt-u, O</td>
      <td align="center" bgcolor="mistyrose" title="Capital O slash"       >&Oslash; </td><td>Opt-O   </td>
      <td align="center" bgcolor="mistyrose" title="Capital OE ligature"   >&OElig;  </td><td>
<? if(!$utf8_site) { ?>
  [OE] verw.
<? } else { ?>
  Opt-Q
<? } ?>
      </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small u grave"         >&ugrave; </td><td>Opt-`, u</td>
      <td align="center" bgcolor="mistyrose" title="Small u acute"         >&uacute; </td><td>Opt-e, u</td>
      <td align="center" bgcolor="mistyrose" title="Small u circumflex"    >&ucirc;  </td><td>Opt-i, u</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small u umlaut"        >&uuml;   </td><td>Opt-u, u</td>
      <td> </td><td> </td>
      <td> </td><td> </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital U grave"       >&Ugrave; </td><td>Opt-`, U</td>
      <td align="center" bgcolor="mistyrose" title="Capital U acute"       >&Uacute; </td><td>Opt-e, U</td>
      <td align="center" bgcolor="mistyrose" title="Capital U circumflex"  >&Ucirc;  </td><td>Opt-i, U</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital U umlaut"      >&Uuml;   </td><td>Opt-u, U</td>
      <th colspan=2 bgcolor="cornsilk">W&auml;hrungen</th>
      <th colspan=2 bgcolor="cornsilk">Mathematik</th>
  </tr>
  <tr><td> </td><td> </td>
      <td> </td><td> </td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Small n tilde"         >&ntilde; </td><td>Opt-n, n</td>
      <td align="center" bgcolor="mistyrose" title="Small y umlaut"        >&yuml;   </td><td>Opt-u, y</td>
      <td align="center" bgcolor="mistyrose" title="Cents"                 >&cent;   </td><td>Opt-4   </td>
      <td align="center" bgcolor="mistyrose" title="plus/minus"            >&plusmn; </td><td>Shift-Opt-=</td>
  </tr>
  <tr><td> </td><td> </td>
      <td> </td><td> </td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Capital N tilde"       >&Ntilde; </td><td>Opt-n, N</td>
      <td align="center" bgcolor="mistyrose" title=""></td><td></td>
      <td align="center" bgcolor="mistyrose" title="Pounds"                >&pound;  </td><td>Opt-3   </td>
      <td align="center" bgcolor="mistyrose" title="Multiplication"        >&times;  </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
  </tr>
  <tr><th colspan=2 bgcolor="cornsilk">Cedille </th>
      <th colspan=2 bgcolor="cornsilk">Isl&auml;ndisch  </th>
      <th colspan=2 bgcolor="cornsilk">Symbole    </th>
      <th colspan=2 bgcolor="cornsilk">Akzente     </th>
      <th colspan=2 bgcolor="cornsilk">Satzzeichen </th>
      <td align="center" bgcolor="mistyrose" title="Yen"                   >&yen;    </td><td>Opt-y   </td>
      <td align="center" bgcolor="mistyrose" title="Division"              >&divide; </td><td>Opt-/   </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Small c cedilla"       >&ccedil; </td><td>Opt-c   </td>
      <td align="center" bgcolor="mistyrose" title="Capital Thorn"         >&THORN;  </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="Copyright"             >&copy;   </td><td>Opt-g   </td>
      <td align="center" bgcolor="mistyrose" title="acute accent"          >&acute;  </td><td>Opt-E   </td>
      <td align="center" bgcolor="mistyrose" title="Inverted Question Mark">&iquest; </td><td>Opt-?   </td>
      <td align="center" bgcolor="mistyrose" title="Dollars"               >$   </td><td>Shift-4</td>
      <td align="center" bgcolor="mistyrose" title="Logical Not"           >&not;    </td><td>Opt-l   </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="Capital C cedilla"     >&Ccedil; </td><td>Opt-C   </td>
      <td align="center" bgcolor="mistyrose" title="Small thorn"           >&thorn;  </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="Registration Mark"     >&reg;    </td><td>Opt-r   </td>
      <td align="center" bgcolor="mistyrose" title="umlaut accent"         >&uml;    </td><td>Opt-U   </td>
      <td align="center" bgcolor="mistyrose" title="Inverted Exclamation"  >&iexcl;  </td><td>Opt-1   </td>
      <td align="center" bgcolor="mistyrose" title="General Currency"      >&curren; </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="Degrees"               >&deg;    </td><td>Shift-Opt-8   </td>
  </tr>
  <tr><th colspan=2 bgcolor="cornsilk">Hochzahlen        </th>
      <td align="center" bgcolor="mistyrose" title="Capital Eth"           >&ETH;    </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="Trademark"             >&trade;  </td><td>Opt-2   </td>
      <td align="center" bgcolor="mistyrose" title="macron accent"         >&macr;   </td><td>Shift-Opt-,</td>
      <td align="center" bgcolor="mistyrose" title="guillemot left"        >&laquo;  </td><td>Opt-\   </td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Micro"                 >&micro;  </td><td>Opt-m   </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="superscript 1"         >&sup1;   </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="Small eth"             >&eth;    </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="Paragraph (pilcrow)"   >&para;   </td><td>Opt-7   </td>
      <td align="center" bgcolor="mistyrose" title="cedilla"               >&cedil;  </td><td>Opt-Z   </td>
      <td align="center" bgcolor="mistyrose" title="guillemot right"       >&raquo;  </td><td>Shift-Opt-\</td>
      <th colspan=2 bgcolor="cornsilk">Ordnungszeichen</th>
      <td align="center" bgcolor="mistyrose" title="1/4 Fraction"          >&frac14; </td><td>(n.&nbsp;v.)&nbsp;&Dagger;<sup><small>1</small></sup>  </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="superscript 2"         >&sup2;   </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <th colspan=2 bgcolor="cornsilk">sz-Ligatur        </th>
      <td align="center" bgcolor="mistyrose" title="Section"               >&sect;   </td><td>Opt-6   </td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="Middle dot"            >&middot; </td><td>Shift-Opt-9  </td>
      <td align="center" bgcolor="mistyrose" title="Masculine Ordinal"     >&ordm;   </td><td>Opt-0   </td>
      <td align="center" bgcolor="mistyrose" title="1/2 Fraction"          >&frac12; </td><td>(n.&nbsp;v.)&nbsp;&Dagger;<sup><small>1</small></sup>  </td>
  </tr>
  <tr><td align="center" bgcolor="mistyrose" title="superscript 3"         >&sup3;   </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td align="center" bgcolor="mistyrose" title="sz ligature"           >&szlig;  </td><td>Opt-s   </td>
      <td align="center" bgcolor="mistyrose" title="Broken Vertical bar"   >&brvbar; </td><td>(n.&nbsp;v.)&nbsp;&Dagger;</td>
      <td> </td><td> </td>
      <td align="center" bgcolor="mistyrose" title="asterisk"              >*   </td><td>Shift-8 </td>
      <td align="center" bgcolor="mistyrose" title="Feminine Ordinal"      >&ordf;   </td><td>Opt-9   </td>
      <td align="center" bgcolor="mistyrose" title="3/4 Fraction"          >&frac34; </td><td>(n.&nbsp;v.)&nbsp;&Dagger;<sup><small>1</small></sup>  </td>
  </tr>
  </tbody>
</table>
<p>&Dagger;&nbsp;Anmerkung: Kein Tastenk&uuml;rzel vorhanden; verwenden Sie die
   Pulldown-Men&uuml;s.
</p>
<p><sup><small>1</small></sup>Wenn es in den <a href="#comments">Projektkommentaren</a>
   nicht ausdr&uuml;cklich verlangt wird, verwenden Sie bitte keine Bruch-Symbole,
   sondern die Regeln f&uuml;r <a href="#fract_s">Br&uuml;che</a> (1/2, 1/4, 3/4,
   usw.).
</p>


<h3><a name="d_chars">Buchstaben mit diakritischen Zeichen</a></h3>
<p>In manchen Projekten gibt es Buchstaben mit speziellen Kennzeichnungen &uuml;ber
   oder unter dem normalen lateinischen Buchstaben A ... Z. Sie werden <i>diakritische
   Zeichen</i> genannt und weisen auf eine spezielle Aussprache dieses Buchstabens
   hin.
<? if($utf8_site) { ?>
</p>
<p>Wenn ein solches Zeichen in Unicode nicht existiert, geben Sie es mittels
   <i>kombinierender diakritischer Zeichen</i> ein. Das sind Unicode-Symbole, die
   nicht allein stehen k&ouml;nnen, vielmehr erscheinen sie &uuml;ber (oder unter)
   dem Buchstaben, nach dem sie gesetzt sind. Zun&auml;chst wird der Basisbuchstabe
   getippt, dann das Kombinationszeichen. Dazu benutzt man Applets und Programme wie
   <a href="#a_chars">oben</a> genannt.
</p>
<p>Auf manchen Rechnern erscheinen diakritische Zeichen nicht genau dort, wo sie
   sein sollten, sondern z. B. nach rechts verschoben. Sie sollten dennoch benutzt
   werden, denn auf anderen Rechnern werden sie korrekt angezeigt. Jedoch: Wenn
   Sie aus irgendeinem Grund Kombinationszeichen nicht ordentlich sehen oder eingeben
   k&ouml;nnen, markieren Sie einen solchen Buchstaben mit einem <tt>*</tt>. Beachten
   Sie, dass es auch &bdquo;spacing modifier letters&ldquo; (Zeichen, die wie Buchstaben
   eigenen Platz beanspruchen) gibt; diese sollten nicht benutzt werden.
</p>
<? } else { ?>
   Beim Formatieren deuten wir sie in unserem normalen ASCII-Text mit einer speziellen
   Kodierung an, wie: &#259; wird zu <tt>[)a]</tt> f&uuml;r einen Brevis (den
   u-f&ouml;rmigen Akzent) &uuml;ber dem a oder <tt>[a)]</tt> f&uuml;r einen Brevis
   unter dem Buchstaben.
</p>
<p>Vergessen Sie nicht die eckigen Klammern (<tt>[&nbsp;]</tt>) rund um diese
   Zeichenkombination, damit der Nachbearbeiter wei&szlig;, zu welchem Buchstaben
   das Zeichen geh&ouml;rt. Bei der Nachbearbeitung wird es dann durch ein Zeichen
   ersetzt, das in der endg&uuml;ltigen Textversion (7-bit-ASCII, 8-bit, Unicode,
   html usw.) m&ouml;glich ist.
</p>
<p>Beachten Sie auch, dass es einige Buchstaben mit diakritischen Zeichen (vor
   allem die Vokale) bereits in unserem Standard-Latin-1-Zeichensatz gibt. <b>Verwenden
   Sie in diesem Falle das Latin-1-Zeichen (siehe <a href="#a_chars">hier</a>),
   das Sie zum Beispiel &uuml;ber die Pulldown-Men&uuml;s in der
   Korrekturlese-Oberfl&auml;che aufrufen k&ouml;nnen.</b>
</p>
<!-- END RR -->

<p>Die folgende Tabelle listet die derzeit verwendeten Kodierungen auf. Das
   &bdquo;x&ldquo; steht dabei f&uuml;r einen beliebigen Buchstaben, der ein
   diakritisches Zeichen erh&auml;lt.<br>
   Beim Formatieren verwenden Sie das jeweilige Zeichen aus dem Text anstelle des
   im Beispiel verwendeten <tt>x</tt>.
</p>

<!--
  diacritical mark           above  below
macron (straight line)       [=x]   [x=]
2 dots (dieresis or umlaut)  [:x]   [x:]
1 dot                        [.x]   [x.]
grave accent                 ['x]   [x'] or [/x] [x/]
acute (aigu) accent          [`x]   [x`] or [\x] [x\]
circumflex                   [^x]   [x^]
caron (v-shaped symbol)      [vx]   [xv]
breve (u-shaped symbol)      [)x]   [x)]
tilde                        [~x]   [x~]
cedilla                      [,x]   [x,]
-->

<table align="center" border="6" rules="all" summary="Diacriticals">
  <tbody>
  <tr bgcolor="cornsilk">
      <th colspan=4>Symbole zum Korrekturlesen von diakritischen Zeichen</th>
  <tr bgcolor="cornsilk">
      <th>Diakritisches Zeichen</th>
      <th>Beispiel</th>
      <th>&Uuml;ber</th>
      <th>Unter</th>
   </tr>
  <tr><td>Makron (Querstrich)</td>
      <td align="center">&macr;</td>
      <td align="center"><tt>[=x]</tt></td>
      <td align="center"><tt>[x=]</tt></td>
      </tr>
  <tr><td>2 Punkte (Trema, Umlaut)</td>
      <td align="center">&uml;</td>
      <td align="center"><tt>[:x]</tt></td>
      <td align="center"><tt>[x:]</tt></td>
      </tr>
  <tr><td>1 Punkt</td>
      <td align="center">&middot;</td>
      <td align="center"><tt>[.x]</tt></td>
      <td align="center"><tt>[x.]</tt></td>
      </tr>
  <tr><td>Gravis</td>
      <td align="center">`</td>
      <td align="center"><tt>[`x]</tt> or <tt>[\x]</tt></td>
      <td align="center"><tt>[x`]</tt> or <tt>[x\]</tt></td>
      </tr>
  <tr><td>Akut (aigu)</td>
      <td align="center">&acute;</td>
      <td align="center"><tt>['x]</tt> or <tt>[/x]</tt></td>
      <td align="center"><tt>[x']</tt> or <tt>[x/]</tt></td>
      </tr>
  <tr><td>Zirkumflex</td>
      <td align="center">&circ;</td>
      <td align="center"><tt>[^x]</tt></td>
      <td align="center"><tt>[x^]</tt></td>
      </tr>
  <tr><td>Hatschek (v-f&ouml;rmiges Symbol)</td>
      <td align="center"><font size="-2">&or;</font></td>
      <td align="center"><tt>[vx]</tt></td>
      <td align="center"><tt>[xv]</tt></td>
      </tr>
  <tr><td>Brevis (u-f&ouml;rmiges Symbol)</td>
      <td align="center"><font size="-2">&cup;</font></td>
      <td align="center"><tt>[)x]</tt></td>
      <td align="center"><tt>[x)]</tt></td>
      </tr>
  <tr><td>Tilde</td>
      <td align="center">&tilde;</td>
      <td align="center"><tt>[~x]</tt></td>
      <td align="center"><tt>[x~]</tt></td>
      </tr>
  <tr><td>Cedille</td>
      <td align="center">&cedil;</td>
      <td align="center"><tt>[,x]</tt></td>
      <td align="center"><tt>[x,]</tt></td>
      </tr>
  </tbody>
</table>
<? } ?>

<h3><a name="f_chars">Nicht-lateinische Zeichen</a></h3>
<p>Manche Projekte beinhalten Zeichen aus nicht-lateinischen Schriften, also andere
   als die lateinischen Buchstaben A...Z &ndash; beispielsweise griechische, kyrillische
   (verwendet in Russisch, Slawisch usw.), hebr&auml;ische oder arabische Buchstaben.
</p>
<? if(strcasecmp($charset,"UTF-8")) { ?>
<p>Bei griechischen Buchstaben sollten Sie eine Transliteration versuchen. Dabei
   wird jeder Buchstabe des fremden Alphabets in den/die betreffenden lateinischen
   Buchstaben &uuml;bertragen. Ein Tool, das die griechische Transliteration
   erleichtert, k&ouml;nnen Sie aus der Korrekturlese-Oberfl&auml;che aufrufen.
</p>
<p>Klicken Sie dazu auf die Schaltfl&auml;che &sbquo;Greek-Transliterator&lsquo;
   im unteren Bereich der Korrekturlese-Oberfl&auml;che. W&auml;hlen Sie dann mit
   der Maus die ben&ouml;tigten griechischen Buchstaben aus. Die entsprechenden
   Latin-1-Zeichen werden im Textfeld eingef&uuml;gt. Wenn Sie fertig sind,
   &uuml;bernehmen Sie den transliterierten Text mit &bdquo;Ausschneiden &amp;
   Einf&uuml;gen&ldquo; in die aktuelle Buchseite. Umschlie&szlig;en Sie den
   transliterierten Text noch mit der Griechisch-Markierung <tt>[Greek:&nbsp;</tt>
   und <tt>]</tt>. So wird zum Beispiel <b>&Beta;&iota;&beta;&lambda;&omicron;&sigmaf;</b>
   in der Transliteration zu <tt>[Greek: Biblos]</tt> (&bdquo;Buch&ldquo; &ndash; ein
   passendes Beispiel f&uuml;r DP!).
</p>
<p>Wenn Sie sich Ihrer Transliteration nicht sicher sind, markieren Sie diese mit
   zwei Sternchen <tt>**</tt>, damit der n&auml;chste Formatierer und der Nachbearbeiter
   darauf aufmerksam werden. </p>
<p>Andere Schriften, die nicht so leicht transliteriert werden k&ouml;nnen, wie
   etwa Kyrillisch, Hebr&auml;isch oder Arabisch, kennzeichnen Sie einfach mit
   der entsprechenden Markierung <tt>[Cyrillic:&nbsp;**]</tt>, <tt>[Hebrew:&nbsp;**]</tt>
   oder <tt>[Arabic:&nbsp;**]</tt>. Den Text lassen Sie so stehen, wie er gescannt
   wurde. Vergessen Sie dabei nicht die beiden Sternchen <tt>**</tt>, damit der
   Nachbearbeiter den Text leichter finden und bearbeiten kann.
</p>
<!-- END RR -->

<ul compact>
  <li>Griechisch: Hierbei hilft das <a href="<? echo $PG_greek_howto_url; ?>">Greek
      HOWTO</a> (des Project Gutenberg) und das Popup-Tool &sbquo;Greek
      Transliterator&lsquo; der Korrekturlese-Oberfl&auml;che.
  </li>
  <li>Kyrillisch: Es gibt zwar eine Standard-Transliteration f&uuml;r kyrillische
      Zeichen, aber Sie sollten sich nur daran versuchen, wenn Sie die entsprechende
      Sprache in kyrillischer Schrift gut beherrschen und flie&szlig;end sprechen.
      Andernfalls setzen Sie einfach eine Markierung wie oben beschrieben. Vielleicht
      wird Ihnen diese <a href="http://learningrussian.com/transliteration.htm">Transliterationstabelle</a>
      n&uuml;tzlich sein.
  </li>
  <li>Hebr&auml;isch und Arabisch: Eine Bearbeitung ist nur sinnvoll, wenn Sie
      die Sprache flie&szlig;end sprechen. Es gibt einige prinzipielle Probleme
      bei der Transliteration, und weder <a href="..">Distributed Proofreaders</a>
      noch <a href="<? echo $PG_home_url; ?>">Project Gutenberg</a> haben bisher
      eine Standardmethode festgelegt.
  </li>
</ul>
<? } else { ?>
<p>Diese Zeichen sollten in den Text eingegeben werden wie lateinische Buchstaben
   (<b>OHNE Transliteration!</b>). </p>
<p>Ist ein Dokument vollst&auml;ndig in einer nicht-lateinischen Schrift gedruckt,
   so ist es am besten, einen Tastaturtreiber zu installieren, der die entsprechende
   Sprache unterst&uuml;tzt. Sehen Sie im Handbuch Ihres Betriebssystems nach,
   wie das gemacht wird. </p>
<p>Taucht die Schrift nur bei vereinzelten W&ouml;rtern auf, k&ouml;nnen Sie auch
   ein externes Programm zur Eingabe verwenden. Einige solche Programme finden
   sie <a href="#a_chars">weiter oben</a>.
</p>
<p>Sollten Sie sich hinsichtlich eines Zeichens oder Akzents unsicher sein, markieren
   Sie die Stelle mit <tt>*</tt>, damit sie der n&auml;chste Formatierer bzw. der
   Nachbearbeiter leicht finden kann. </p>
<p>Bei Schriften, die nicht so einfach transliteriert werden k&ouml;nnen, wie
   z.B. Arabisch, umgeben Sie den Text mit der entsprechenden Markierung
   <tt>[Arabic:&nbsp;**]</tt> und lassen ihn wie eingescannt stehen.
   Schlie&szlig;en Sie die <tt>**</tt> ein, damit der Nachbearbeiter den Text
   sp&auml;ter leichter finden und bearbeiten kann.
</p>
<? } ?>

<h3><a name="fract_s">Br&uuml;che</a></h3>
<p>Formatieren Sie <b>Br&uuml;che</b> folgenderma&szlig;en: <tt>2&frac12;</tt>
   wird zu <tt>2-1/2</tt>. Der Bindestrich zwischen ganzer Zahl und Bruch verhindert
   bei der Nachbearbeitung, dass die Zeile an dieser Stelle umgebrochen wird.
</p>

<h3><a name="page_ref">Seitenverweise (&bdquo;siehe S. 123&ldquo;)</a></h3>
<p>Formatieren Sie Seitenverweise innerhalb des Textes wie <tt>(siehe S. 123)</tt>
   so, wie sie in der Vorlage erscheinen.
</p>
<p>Pr&uuml;fen Sie die <a href="#comments">Projektkommentare</a>, um zu sehen,
   ob der Projektmanager besondere Vorgaben f&uuml;r Seitenverweise hat.
</p>

<h3><a name="bk_index">Sachregister und Schlagwortverzeichnisse</a></h3>
<p>Bitte erhalten Sie die Seitenzahlen auf Registerseiten. Umschlie&szlig;en Sie
   das Register mit den Markierungen <tt>/*</tt> und <tt>*/</tt> und lassen Sie
   eine Leerzeile vor dem &ouml;ffnenden <tt>/*</tt>. Sie brauchen die Zahlen nicht
   so auszurichten, wie sie auf der Vorlage aussehen. Setzen Sie lediglich ein
   Komma oder einen Semikolon, gefolgt von den Seitenzahlen.
</p>
<p>Register sind oft in zwei Spalten gedruckt. Die geringere Breite kann dazu
   f&uuml;hren, dass Teile von Eintr&auml;gen in die n&auml;chste Zeile umgebrochen
   werden. Verbinden Sie diese wieder zu einer Zeile. </p>
<p>Bei Registern sind die langen Zeilen, die durch Befolgen dieser Regel entstehen,
   akzeptabel, da die Zeilen beim Nachbearbeiten auf die richtige Breite umgebrochen
   und einger&uuml;ckt werden. </p>
<p>F&uuml;gen Sie zwischen allen Eintr&auml;gen des Registers eine Leerzeile ein.
</p>
<p>Untereintr&auml;ge in einem Register beginnen Sie jeweils auf einer neuen Zeile,
   um zwei Leerzeichen einger&uuml;ckt. </p>
<p>Behandeln Sie jeden neuen Abschnitt in einem Register (A, B, C&nbsp;...) genauso
   wie eine <a href="#sect_head">Abschnitts&uuml;berschrift</a>, indem Sie zwei
   Leerzeilen davor einf&uuml;gen. </p>
<p>In alten B&uuml;chern ist das erste Wort jedes Buchstabens im Index manchmal
   in Gro&szlig;buchstaben oder Kapit&auml;lchen gedruckt. &Auml;ndern Sie es so,
   dass der Eintrag im Stil zu den anderen Eintr&auml;gen des Registers passt.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1"  cellpadding="4" cellspacing="0" summary="Rejoining Index Lines">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Gescannter Text:</th></tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    Elizabeth I, her royal Majesty the<br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Queen, 123, 144-155.<br>
    &nbsp;&nbsp;birth of, 145.<br>
    &nbsp;&nbsp;christening, 146-147.<br>
    &nbsp;&nbsp;death and burial, 152.<br>
    <br>
    Ethelred II, the Unready, 33.
</td></tr></table>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text (mit verbundenen Zeilen):</th>
    </tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    <tt><br>/*<br>
    Elizabeth I, her royal Majesty the Queen, 123, 144-155.<br>
    &nbsp;&nbsp;birth of, 145.<br>
    &nbsp;&nbsp;christening, 146-147.<br>
    &nbsp;&nbsp;death and burial, 152.<br>
    <br>
    Ethelred II, the Unready, 33.<br>
    */</tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>
<br>
<table width="100%" align="center" border="1"  cellpadding="4" cellspacing="0" summary="Aligning Index Subtopics">
  <tbody>
    <tr><th align="left" bgcolor="cornsilk">Gescannter Text:</th></tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    Hooker, Jos., maj. gen. U. S. V., 345; assigned<br>
    &nbsp;&nbsp;to command Porter's corps, 350; afterwards,<br>
    &nbsp;&nbsp;McDowell's, 367; in pursuit of Lee, 380;<br>
    &nbsp;&nbsp;at South Mt., 382; unacceptable to Halleck,<br>
    &nbsp;&nbsp;retires from active service, 390.<br>
    <br>
    Hopkins, Henry H., 209; notorious secessionist in<br>
    &nbsp;&nbsp;Kanawha valley, 217; controversy with Gen.<br>
    &nbsp;&nbsp;Cox over escaped slave, 233.<br>
    <br>
    Hosea, Lewis M., 187; capt. on Gen. Wilson's staff, 194.<br>
</td></tr></table>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text (mit ausgerichteten
        Registeruntereintr&auml;gen):</th>
    </tr>
    <tr>
      <td valign="top">
<table summary="" border="0" align="left"><tr><td>
    <tt><br>/*<br>
    Hooker, Jos., maj. gen. U. S. V., 345;<br>
    &nbsp;&nbsp;assigned to command Porter's corps, 350;<br>
    &nbsp;&nbsp;afterwards, McDowell's, 367;<br>
    &nbsp;&nbsp;in pursuit of Lee, 380;<br>
    &nbsp;&nbsp;at South Mt., 382;<br>
    &nbsp;&nbsp;unacceptable to Halleck, retires from active service, 390.<br>
    <br>
    Hopkins, Henry H., 209;<br>
    &nbsp;&nbsp;notorious secessionist in Kanawha valley, 217;<br>
    &nbsp;&nbsp;controversy with Gen. Cox over escaped slave, 233.<br>
    <br>
    Hosea, Lewis M., 187;<br>
    &nbsp;&nbsp;capt. on Gen. Wilson's staff, 194.<br>
    */</tt>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="play_n">Dramen: Rollennamen/Regieanweisungen</a></h3>
<p>F&uuml;r alle Dramen gilt:</p>
<ul compact>
  <li>Formatieren Sie Besetzungslisten (Dramatis Person&aelig;) wie
      <a href="#lists">Aufz&auml;hlungen</a>.</li>
  <li>F&uuml;gen Sie vier Leerzeilen vor dem Beginn des Aktes ein.</li>
  <li>F&uuml;gen Sie zwei Leerzeilen vor dem Beginn jeder Szene ein.</li>
  <li>Innerhalb der Dialoge behandeln Sie einen Wechsel des Sprechers als einen
      neuen Absatz, mit jeweils einer Leerzeile davor.</li>
  <li>Formatieren Sie die Namen der Darsteller wie auf der Vorlage &ndash; <a href="#italics">kursiv</a>,
      <a href="#bold">fett</a> oder in <a href="#word_caps">Gro&szlig;buchstaben</a>.</li>
  <li>Regieanweisungen werden so formatiert, wie sie im Originaltext sind.<br>
      Steht die Anweisung in einer eigenen Zeile, dann formatieren Sie sie so; steht
      sie am Ende einer Dialogzeile, dann lassen Sie sie dort. Ist sie rechtsb&uuml;ndig
      am Ende eines Dialogs ausgerichtet, so lassen Sie sechs Leerzeichen zwischen
      dem Dialog und der Regieanweisung frei.<br>
      Regieanweisungen beginnen h&auml;ufig mit einer &ouml;ffnenden Klammer und
      lassen die schlie&szlig;ende Klammer weg.<br>
      Diese Konvention wird beibehalten; schlie&szlig;en Sie die Klammern nicht.
      Bei kursiv gedrucktem Text wird die Markierung &lt;i&gt;&lt;/i&gt; im Allgemeinen
      innerhalb der Klammern platziert.</li>
</ul>
<p>Metrische B&uuml;hnenst&uuml;cke (B&uuml;hnenst&uuml;cke, die als Lyrik in
   Versen geschrieben sind):
</p>
<ul compact>
  <li>Viele B&uuml;hnenst&uuml;cke sind metrisch und sollten, wie Lyrik, nicht
      neu umgebrochen werden. Umschlie&szlig;en Sie metrischen Text mit <tt>/*</tt>
      und <tt>*/</tt>, so wie bei Gedichten. Wenn B&uuml;hnenanweisungen auf einer
      eigenen Zeile stehen, umschlie&szlig;en Sie sie nicht mit <tt>/*</tt> und
      <tt>*/</tt>. (B&uuml;hnenanweisungen sind nicht metrisch und d&uuml;rfen deshalb
      bei der Nachbearbeitung umgebrochen werden. Daher sollten sie nicht in
      /*&nbsp;*/-Markierungen stehen, die den metrischen Dialog vor dem Umbruch sch&uuml;tzen.)</li>
  <li>Erhalten Sie den relativen Einzug von Dialog, wenn der Text einer einzelnen
      Zeile von mehr als einem Sprecher gesprochen wird.</li>
  <li>Verbinden Sie metrische Zeilen, die wegen ihrer &Uuml;berl&auml;nge geteilt
      wurden, genauso wie bei Lyrik.<br>
      Besteht die Fortsetzung nur aus einem Wort o.&nbsp;&auml;., wird dieses oft
      hinter eine ( mit auf die Zeile dar&uuml;ber oder darunter gesetzt statt in
      eine eigene Zeile.<br>
      Ein Beispiel finden Sie <a href="#play4">hier</a>.</li>
</ul>
<p>Bitte pr&uuml;fen Sie die <a href="#comments">Projektkommentare</a>, da der
   Projektmanager eine andere Formatierung festlegen kann.
</p>
<!-- END RR -->

<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Play Example 1">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top"><img src="play1.png" width="500"
          height="430" alt=""><br>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<p><tt>/*<br>
Has not his name for nought, he will be trode upon:<br>
What says my Printer now?
</tt></p><p><tt>
&lt;i&gt;Clow.&lt;/i&gt; Here's your last Proof, Sir.<br>
You shall have perfect Books now in a twinkling.
</tt></p><p><tt>
&lt;i&gt;Lap.&lt;/i&gt; These marks are ugly.
</tt></p><p><tt>
&lt;i&gt;Clow.&lt;/i&gt; He says, Sir, they're proper:<br>
Blows should have marks, or else they are nothing worth.
</tt></p><p><tt>
&lt;i&gt;La.&lt;/i&gt; But why a Peel-crow here?
</tt></p><p><tt>
&lt;i&gt;Clow.&lt;/i&gt; I told 'em so Sir:<br>
A scare-crow had been better.
</tt></p><p><tt>
&lt;i&gt;Lap.&lt;/i&gt; How slave? look you, Sir,<br>
Did not I say, this &lt;i&gt;Whirrit&lt;/i&gt;, and this &lt;i&gt;Bob&lt;/i&gt;,<br>
Should be both &lt;i&gt;Pica Roman&lt;/i&gt;.
</tt></p><p><tt>
&lt;i&gt;Clow.&lt;/i&gt; So said I, Sir, both &lt;i&gt;Picked Romans&lt;/i&gt;,<br>
And he has made 'em &lt;i&gt;Welch&lt;/i&gt; Bills,<br>
Indeed I know not what to make on 'em.
</tt></p><p><tt>
&lt;i&gt;Lap.&lt;/i&gt; Hay-day; a &lt;i&gt;Souse&lt;/i&gt;, &lt;i&gt;Italica&lt;/i&gt;?
</tt></p><p><tt>
&lt;i&gt;Clow.&lt;/i&gt; Yes, that may hold, Sir,<br>
&lt;i&gt;Souse&lt;/i&gt; is a &lt;i&gt;bona roba&lt;/i&gt;, so is &lt;i&gt;Flops&lt;/i&gt; too.<br>
*/</tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>
<br>
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Play Example 2">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top"><img src="play2.png" width="500"
          height="680" alt=""><br>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<p><tt>/*<br>
&lt;sc&gt;Clin.&lt;/sc&gt; And do I hold thee, my Antiphila,<br>
Thou only wish and comfort of my soul!<br>
<br>
&lt;sc&gt;Syrus.&lt;/sc&gt; In, in, for you have made our good man wait. (&lt;i&gt;Exeunt.&lt;/i&gt;<br>
*/<br>
<br>
<br>
<br>
<br>
ACT THE THIRD.<br>
<br>
<br>
&lt;sc&gt;Scene I.&lt;/sc&gt;<br>
<br>
/*<br>
&lt;sc&gt;Chrem.&lt;/sc&gt; 'Tis now just daybreak.--Why delay I then<br>
To call my neighbor forth, and be the first<br>
To tell him of his son's return?--The youth,<br>
I understand, would fain not have it so.<br>
But shall I, when I see this poor old man<br>
Afflict himself so grievously, by silence<br>
Rob him of such an unexpected joy,<br>
When the discov'ry can not hurt the son?<br>
No, I'll not do't; but far as in my pow'r<br>
Assist the father. As my son, I see,<br>
Ministers to th' occasions of his friend,<br>
Associated in counsels, rank, and age,<br>
So we old men should serve each other too.<br>
*/<br>
<br>
<br>
&lt;sc&gt;Scene II.&lt;/sc&gt;<br>
<br>
&lt;i&gt;Enter&lt;/i&gt; &lt;sc&gt;Menedemus.&lt;/sc&gt;<br>
<br>
/*<br>
&lt;sc&gt;Mene.&lt;/sc&gt; (&lt;i&gt;to himself&lt;/i&gt;). Sure I'm by nature form'd for misery<br>
Beyond the rest of humankind, or else<br>
'Tis a false saying, though a common one,<br>
"That time assuages grief." For ev'ry day<br>
My sorrow for the absence of my son<br>
Grows on my mind: the longer he's away,<br>
The more impatiently I wish to see him,<br>
The more pine after him.<br>
<br>
&lt;sc&gt;Chrem.&lt;/sc&gt; But he's come forth. (&lt;i&gt;Seeing&lt;/i&gt; &lt;sc&gt;Menedemus.&lt;/sc&gt;)<br>
Yonder he stands. I'll go and speak with him.<br>
Good-morrow, neighbor! I have news for you;<br>
Such news as you'll be overjoy'd to hear.<br>
*/</tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>
<br>
<a name="play3"><!-- Example --></a>
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Play Example 3">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top"><img src="play3.png" width="504"
          height="206" alt="Plays image"><br>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<p><tt>[&lt;i&gt;Hernda has come from the grove and moves up to his side&lt;/i&gt;]<br>
<br>
/*<br>
&lt;i&gt;Her.&lt;/i&gt; [&lt;i&gt;Adoringly&lt;/i&gt;] And you the master!<br>
<br>
&lt;i&gt;Hud.&lt;/i&gt; Daughter, you owe my lord Megario<br>
Some pretty thanks.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[&lt;i&gt;Kisses her cheek&lt;/i&gt;]<br>
<br>
&lt;i&gt;Her.&lt;/i&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I give them, sir.<br>
*/</tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>
<br>
<a name="play4"><!-- Example --></a>
<table width="100%" align="center" border="1" cellpadding="4"
 cellspacing="0" summary="Play Example 4">
  <tbody>
    <tr>
      <th align="left" bgcolor="cornsilk">Beispielvorlage:</th>
    </tr>
    <tr align="left">
      <td width="100%" valign="top"><img src="play4.png" width="502"
          height="98" alt="Plays image"><br>
      </td>
    </tr>
    <tr>
      <th align="left" bgcolor="cornsilk">Richtig formatierter Text:</th>
    </tr>
    <tr>
      <td width="100%" valign="top">
<table summary="" border="0" align="left"><tr><td>
<p><tt>/*<br>
&lt;i&gt;Am.&lt;/i&gt; Sure you are fasting;<br>
Or not slept well to night; some dream (&lt;i&gt;Ismena?&lt;/i&gt;)<br>
<br>
&lt;i&gt;Ism.&lt;/i&gt; My dreams are like my thoughts, honest and innocent,<br>
Yours are unhappy; who are these that coast us?<br>
You told me the walk was private.<br>
*/</tt></p>
</td></tr></table>
      </td>
    </tr>
  </tbody>
</table>

<h3><a name="anything">Sonstige Besonderheiten und Behandlung von Unklarheiten</a></h3>
<p>Vielleicht sto&szlig;en Sie w&auml;hrend des Formatierens auf etwas, das nicht
   von diesen Richtlinien abgedeckt wird, das Ihrer Meinung nach einer besonderen
   Behandlung bedarf oder von dem Sie nicht sicher wissen, wie es behandelt werden
   soll. Stellen Sie Ihre Frage unter Angabe der png-Nummer (Seitenzahl) ins
   Projektforum (ein Link zum projektspezifischen Forum-Thread steht in den
   <a href="#comments">Projektkommentaren</a>). Setzen Sie zus&auml;tzlich eine
   Anmerkung in den formatierten Text, die das Problem erl&auml;utert. Durch Ihre
   Anmerkung werden der nachfolgende Freiwillige bzw. der Nachbearbeiter auf das
   Problem hingewiesen.
</p>
<p>Beginnen Sie die Anmerkung mit einer eckigen Klammer und zwei Sternchen <tt>[**</tt>
   und schlie&szlig;en Sie sie wiederum mit einer eckigen Klammer <tt>]</tt>. Dadurch
   ist sie deutlich vom Text des Autors getrennt und signalisiert dem Nachbearbeiter
   innezuhalten. Er wird diesen Teil des Textes und die dazugeh&ouml;rige Vorlage
   sorgf&auml;ltig untersuchen, um etwaige Probleme zu l&ouml;sen. Alle Kommentare
   von Lesern aus fr&uuml;heren Runden <b>m&uuml;ssen</b> an Ort und Stelle bleiben.
   Sie k&ouml;nnen Ihre Zustimmung oder Ablehnung hinzuf&uuml;gen, aber selbst
   wenn Sie die Antwort wissen, d&uuml;rfen Sie den Kommentar auf keinen Fall entfernen.
   Wenn Sie eine Quelle f&uuml;r die L&ouml;sung des Problems gefunden haben, so
   geben Sie sie bitte an, damit sich der Nachbearbeiter auch darauf beziehen kann.
</p>
<p>Wenn Sie in einer sp&auml;teren Runde formatieren und auf die Anmerkung eines
   Mitlesers aus einer fr&uuml;heren Runde sto&szlig;en, deren L&ouml;sung Sie
   kennen, nehmen Sie sich bitte einen Moment Zeit und geben ihm R&uuml;ckmeldung.
   Klicken Sie dazu auf seinen Namen in der Korrekturlese-Oberfl&auml;che und schicken
   Sie ihm eine private Mitteilung, in der Sie erkl&auml;ren, wie das Problem in
   Zukunft behandelt werden soll. Aber, wie bereits gesagt, lassen Sie die Anmerkung
   auf jeden Fall stehen.
</p>

<h3><a name="prev_notes">Anmerkungen vorhergehender Korrekturleser</a></h3>
<p>Alle Anmerkungen oder Kommentare von Lesern aus fr&uuml;heren Runden
   <b>m&uuml;ssen</b> an Ort und Stelle bleiben. Sie k&ouml;nnen Ihre Zustimmung
   oder Ablehnung hinzuf&uuml;gen, aber selbst wenn Sie die Antwort wissen, d&uuml;rfen
   Sie den Kommentar auf keinen Fall entfernen. Wenn Sie eine Quelle f&uuml;r die
   L&ouml;sung des Problems gefunden haben, so geben Sie sie bitte an, damit sich
   der Nachbearbeiter auch darauf beziehen kann. </p>
<p>Wenn Sie in einer sp&auml;teren Runde formatieren und auf die Anmerkung eines
   Mitlesers aus einer fr&uuml;heren Runde sto&szlig;en, deren L&ouml;sung Sie
   kennen, nehmen Sie sich bitte einen Moment Zeit und geben ihm R&uuml;ckmeldung.
   Klicken Sie dazu auf seinen Namen in der Korrekturlese-Oberfl&auml;che und schicken
   Sie ihm eine private Mitteilung, in der Sie erkl&auml;ren, wie das Problem in
   Zukunft behandelt werden soll. Aber, wie bereits gesagt, lassen Sie die Anmerkung
   auf jeden Fall stehen.
</p>
<!-- END RR -->

<br>
<table width="100%" border="0" cellspacing="0" summary="Other Guidelines">
  <tbody>
    <tr>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
  </tbody>
</table>
<br>

<h2><a name="sp_ency"></a>
    <a name="sp_chem"></a>
    <a name="sp_math"></a>
    <a name="sp_poet"></a>
    Sonderrichtlinien f&uuml;r spezielle B&uuml;cher</h2>
<p>F&uuml;r spezielle B&uuml;cher gibt es Sonderrichtlinien, die die normalen
   Richtlinien dieses Dokuments erg&auml;nzen oder ab&auml;ndern k&ouml;nnen.
   Projekte f&uuml;r diese B&uuml;cher sind oft schwierig und werden Anf&auml;ngern
   nicht empfohlen. Sie eignen sich mehr f&uuml;r erfahrene Freiwillige oder solche,
   die besondere Kenntnisse auf dem jeweiligen Gebiet haben.
</p>
<p>Klicken Sie auf die unten stehenden Links, um die Richtlinien f&uuml;r diese
   Arten von B&uuml;chern anzuzeigen.
</p>
<ul compact>
  <li><b><a href="doc-ency.php">Enzyklop&auml;dien</a></b></li>
  <li><b><a href="doc-poet.php">Gedichtb&auml;nde</a></b></li>
  <li><b>Chemieb&uuml;cher [wird erg&auml;nzt]</b></li>
  <li><b>Mathematikb&uuml;cher [wird erg&auml;nzt]</b></li>
</ul>

<table width="100%" border="0" cellspacing="0" summary="Common Problems">
  <tbody>
    <tr>
      <td bgcolor="silver">&nbsp;</td>
    </tr>
  </tbody>
</table>

<h2>Allgemeine Probleme</h2>

<h3><a name="OCR_1lI">OCR-Fehler: 1-l-I</a></h3>
<p>OCR-Software hat gew&ouml;hnlich Schwierigkeiten, die Ziffer &bdquo;1&ldquo;
   (eins), den Kleinbuchstaben &bdquo;l&ldquo; (el) und den Gro&szlig;buchstaben
   &bdquo;I&ldquo; zu unterscheiden. Das gilt vor allem f&uuml;r B&uuml;cher in
   ungew&ouml;hnlichen Schrifttypen oder schlechtem Zustand. </p>
<p>Achten Sie besonders auf diese Zeichen. Lesen Sie den Kontext des Satzes, um
   zu entscheiden, welches das richtige Zeichen ist. Aber geben Sie Acht &ndash;
   h&auml;ufig &bdquo;korrigiert&ldquo; Ihr Verstand die Zeichen automatisch beim
   Lesen. </p>
<p>Die Unterscheidung dieser Zeichen ist einfacher, wenn Sie eine nicht-proportionale
   Schriftart verwenden, wie etwa <a href="font_sample.php">DPCustomMono</a> oder
   Courier.
</p>

<h3><a name="OCR_0O">OCR-Fehler: 0-O</a></h3>
<p>OCR-Software hat gew&ouml;hnlich Schwierigkeiten, die Ziffer &bdquo;0&ldquo;
   (Null) vom Gro&szlig;buchstaben &bdquo;O&ldquo; (Oh) zu unterscheiden. Das gilt
   vor allem f&uuml;r B&uuml;cher in ungew&ouml;hnlichen Schrifttypen oder
   schlechtem Zustand.
</p>
<p>Achten Sie besonders auf diese Zeichen. Lesen Sie den Kontext des Satzes, um
   zu entscheiden, welches das richtige Zeichen ist. Aber geben Sie Acht &ndash;
   h&auml;ufig &bdquo;korrigiert&ldquo; Ihr Verstand die Zeichen automatisch beim
   Lesen.
</p>
<p>Die Unterscheidung dieser Zeichen ist einfacher, wenn Sie eine nicht-proportionale
   Schriftart verwenden, wie etwa <a href="font_sample.php">DPCustomMono</a> oder
   Courier.
</p>

<h3><a name="OCR_hyphen">OCR-Fehler: Binde- und Gedankenstriche</a></h3>
<p>OCR-Software hat gew&ouml;hnlich Schwierigkeiten, die verschiedenen Gedanken-
   und Bindestriche zu unterscheiden. Formatieren Sie diese sorgf&auml;ltig &ndash;
   f&uuml;r Gedankenstriche verwendet die OCR-Software oft nur einen Bindestrich
   anstatt zwei. N&auml;heres zu den Regeln finden Sie unter
   <a href="#eol_hyphen">Trennzeichen</a> und <a href="#em-dashes">Gedankenstriche</a>.
</p>
<p>Die Unterscheidung dieser Zeichen ist einfacher, wenn Sie eine nicht-proportionale
   Schriftart verwenden, wie etwa <a href="font_sample.php">DPCustomMono</a> oder
   Courier.
</p>

<h3><a name="OCR_scanno">OCR-Fehler: &bdquo;Scannos&ldquo;</a></h3>
<p>Ein anderes h&auml;ufiges Problem der OCR ist die falsche Erkennung von Zeichen,
   sogenannte OCR-Fehler (englisch &bdquo;scannos&ldquo;, nachgebildet &bdquo;typos&ldquo;
   f&uuml;r Druck- und Satzfehler). Die Fehlerkennung kann ein Wort bilden, das</p>
<ul compact>
  <li>auf den ersten Blick richtig erscheint, in Wahrheit aber falsch geschrieben ist.<br>
      Solche W&ouml;rter kann das Programm &sbquo;WordCheck&lsquo; in der
      Korrekturlese-Oberfl&auml;che entdecken.</li>
  <li>zu einem anderen, richtigen Wort wird, das nicht dem in der Vorlage entspricht.<br>
      Solche W&ouml;rter sind besonders unangenehm, weil sie nur erkannt werden,
      wenn man die Vorlage Satz f&uuml;r Satz mit dem Text vergleicht.</li>
</ul>
<p>Das verbreitetste Beispiel f&uuml;r die zweite Art ist wahrscheinlich das Wort
   &bdquo;and&ldquo;, eingelesen als &bdquo;arid&ldquo;. Weitere Beispiele sind:
   &bdquo;eve&ldquo; f&uuml;r &bdquo;eye&ldquo;, &bdquo;Torn&ldquo; f&uuml;r
   &bdquo;Tom&ldquo; und &bdquo;train&ldquo; f&uuml;r &bdquo;tram&ldquo;. Dieser
   Typ Fehler ist schwer zu entdecken, und wir haben einen speziellen Ausdruck
   daf&uuml;r: &bdquo;Stealth Scannos&ldquo; (getarnte OCR-Fehler). Beispiele
   von Stealth Scannos sammeln wir in <a href="<? echo $Stealth_Scannos_URL; ?>">diesem
   Thread</a>.
</p>
<p>Das Erkennen von Scannos ist einfacher, wenn Sie eine nicht-proportionale Schriftart
   verwenden, wie etwa <a href="font_sample.php">DPCustomMono</a> oder Courier.
</p>
<!-- END RR -->
<!-- More to be added.... -->

<h3><a name="hand_notes">Handgeschriebene Notizen in B&uuml;chern</a></h3>
<p>&Uuml;bernehmen Sie keine handschriftlichen Erg&auml;nzungen oder Randnotizen
   in den Text (es sei denn, es wurde verblichener gedruckter Text &uuml;berschrieben,
   um ihn besser lesbar zu machen). Lassen Sie auch handgeschriebene Kommentare
   von Lesern usw. au&szlig;en vor. </p>
<p>Manche Projektmanager legen in den <a href="#comments">Projektkommentaren</a>
   fest, dass handgeschriebene Notizen mit <tt>[HW: (Text der Notiz)]</tt> markiert
   werden soll.
</p>

<h3><a name="bad_image">Schlechte Vorlagen</a></h3>
<p>Ist eine Vorlage schlecht (sie wird nicht geladen, ist abgeschnitten oder unlesbar),
   so machen Sie einen Eintrag im <a href="#forums">Projektforum</a>. Klicken Sie
   nicht auf &sbquo;Return Page to Round&lsquo; (Seite zur&uuml;ckgeben); wenn
   Sie das tun, bekommt sie der n&auml;chste Formatierer. Klicken Sie stattdessen
   auf &sbquo;Report Bad Page&lsquo; (unbrauchbare Seite melden), damit die Seite
   in Quarant&auml;ne kommt. </p>
<p>Beachten Sie, dass einige Bilddateien von Seiten recht gro&szlig; sind und
   Ihr Browser Schwierigkeiten bei der Darstellung haben k&ouml;nnte, besonders
   wenn Sie mehrere Fenster ge&ouml;ffnet haben oder einen &auml;lteren Computer
   benutzen. Bevor Sie die Seite als unbrauchbar melden, probieren Sie erst Folgendes
   aus: Klicken Sie auf &sbquo;Image&lsquo; (Vorlage) am unteren Seitenrand, um
   nur die Vorlage in einem neuen Fenster zu laden. Erscheint dann eine leserliche
   Vorlage, dann liegt das Problem vermutlich an Ihrem Browser oder System. </p>
<p>Manchmal ist zwar die Vorlage in Ordnung, aber die ersten ein oder zwei Zeilen
   fehlen im OCR-Text. Tippen Sie in diesem Fall bitte die fehlende(n) Zeile(n)
   ein. Wenn fast alle Zeilen im Korrekturfenster fehlen, tippen Sie entweder die
   ganze Seite ein (wenn Sie dazu bereit sind) oder klicken Sie auf &sbquo;Return
   Page to Round&lsquo;. Dann wird die Seite erneut an jemand anders ausgegeben.
   Gibt es mehrere Seiten dieser Art, sollten Sie im <a href="#forums">Projektforum</a>
   den Projektmanager darauf aufmerksam machen.
</p>

<h3><a name="bad_text">Falsche Vorlage zum Text</a></h3>
<p>Wenn eine falsche Vorlage zum Text im Korrekturfenster angezeigt wird, machen
   Sie einen Eintrag im <a href="#forums">Projektforum</a>. Klicken Sie nicht auf
   &sbquo;Return Page to Round&lsquo; (Seite zur&uuml;ckgeben); wenn Sie das tun,
   bekommt sie der n&auml;chste Formatierer. Klicken Sie stattdessen auf &sbquo;Report
   Bad Page&lsquo; (unbrauchbare Seite melden), damit die Seite in Quarant&auml;ne
   kommt.
</p>

<h3><a name="round1">Fehler der vorherigen Korrekturleser bzw. Formatierer</a></h3>
<p>Wenn ein vorhergehender Freiwilliger sehr viele Fehler gemacht hat oder viel
   &uuml;bersehen hat, nehmen Sie sich bitte einen Moment Zeit und geben Sie ihm
   R&uuml;ckmeldung. Klicken Sie dazu auf seinen Namen in der
   Korrekturlese-Oberfl&auml;che und schicken Sie ihm eine private Mitteilung.
   Erkl&auml;ren Sie ihm, wie er die Situation handhaben sollte, damit er in
   Zukunft besser zurecht kommt. </p>
<p><em>Bitte seien Sie freundlich!</em> Alle hier sind Freiwillige, und wir gehen
   davon aus, dass jeder sein Bestes gibt. Inhalt Ihrer Feedback-Nachricht sollte
   die Information sein, wie richtig formatiert wird, nicht Kritik. Zeigen Sie
   anhand eines Beispiels auf, was der Freiwillige gemacht hat und was er h&auml;tte
   machen sollen. </p>
<p>Hat der vorhergehende Freiwillige hervorragend gearbeitet, so k&ouml;nnen Sie
   ihm ebenfalls eine Nachricht senden &ndash; vor allem, wenn die Seite besonders
   schwierig war.
</p>

<h3><a name="p_errors">Satz- und Rechtschreibfehler: &bdquo;Typos&ldquo;</a></h3>
<p>Korrigieren Sie alle Fehler, die die OCR-Software fehlgelesen hat
   (&bdquo;Scannos&ldquo;) &ndash; aber verbessern Sie nicht, was Ihnen wie
   Rechtschreib- oder Druckfehler vorkommt, die auf der gescannten Vorlage auftreten.
   In vielen &auml;lteren Texten werden W&ouml;rter abweichend vom modernen Gebrauch
   buchstabiert. Wir behalten diese &auml;lteren Schreibweisen bei,
   einschlie&szlig;lich aller Buchstaben mit Akzenten. </p>
<p>Wenn Sie sich nicht sicher sind, setzen Sie eine Anmerkung in den Txet <tt>[**typo
   ?]</tt> und fragen Sie im Projektforum nach. &Auml;ndern Sie etwas, so erkl&auml;ren
   Sie mit einer Anmerkung, was Sie ge&auml;ndert haben: <tt>[**typo fixed, changed
   from "Txet" to "Text"]</tt>. Verwenden Sie hierbei die beiden Sternchen <tt>**</tt>,
   damit der Nachbearbeiter auf diese Stelle aufmerksam wird.
</p>

<h3><a name="f_errors">Tatsachenfehler im Text</a></h3>
<p>Im Allgemeinen gilt: Korrigieren Sie keine Tatsachenfehler im Buch des Autors.
   Viele der B&uuml;cher, die hier bearbeitet werden, enthalten Aussagen, die wir
   nicht mehr als zutreffend empfinden. Lassen Sie diese so, wie sie der Autor
   geschrieben hat. </p>
<p>Eine m&ouml;gliche Ausnahme ist, wenn in technischen oder wissenschaftlichen
   B&uuml;chern eine bekannte Formel oder Gleichung falsch wiedergegeben wird,
   insbesondere wenn dieselbe Formel auf anderen Seiten des Buches richtig steht.
   Benachrichtigen Sie entweder den Projektmanager im <a href="#forums">Projektforum</a>,
   oder f&uuml;gen Sie <tt>[**note sic Ihre Anmerkung]</tt> im Text ein.
</p>

<h3><a name="uncertain">Unklare Punkte</a></h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[... wird erg&auml;nzt ...]
</p>

<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="silver" summary="Links">
<tr>
  <td width="10">&nbsp;</td>
  <td width="100%" align="center"><font face="verdana, helvetica, sans-serif" size="1">
     Return to:
     <a href="..">Distributed Proofreaders home page</a>,
     &nbsp;&nbsp;&nbsp;
     <a href="faq_central.php">DP FAQ Central page</a>,
     &nbsp;&nbsp;&nbsp;
     <a href="<? echo $PG_home_url; ?>">Project Gutenberg home page</a>.
     </font>
  </td>
</tr>
</table>

<?
theme('','footer');
?>
