<html>
<head>
  <title>Основы языка HTML</title>
   <link rel="stylesheet" type="text/css" href="Style1.css">
   <link rel="stylesheet" type="text/css" href="Text1.css">
   <link rel="SHORTCUT ICON" href="primer/pick.gif" >
 <Style>

  body { background-image: url(primer/fon.png) ;
-moz-background-size: 100%;
   -webkit-background-size: 100%;
   -o-background-size: 100%;
    background-size: 100%;
    }
    </Style>
</head>


<body>
  <div class="form">
	<div class="container">
		<h4><i>
      <table class="raz">
  <tr>
    <td><a href="">____________________</a>
    <td><a href="HTML1.php">На главную</a>
    <td><a href="">____________________</a>
  </tr>
</table>
	                                                <hr/><p align="center"><big>1 Основы языка HTML</big></p><hr/>
<p style="text-indent:20px"> <u>HyperText Markup Language (HTML)</u> - язык разметки гипертекста - предназначен для написания гипертекстовых документов, публикуемых в World Wide Web.<br> 

<p style="text-indent:20px">Гипертекстовый документ - это текстовый файл, имеющий специальные метки, называемые тегами, которые впоследствии опознаются браузером и используются им для отображения содержимого файла на экране компьютера. С помощью этих меток можно выделять заголовки документа, изменять цвет, размер и начертание букв, вставлять графические изображения и таблицы. Но основным преимуществом гипертекста перед обычным текстом является возможность добавления к содержимому документа гиперссылок - специальных конструкций языка HTML, которые позволяют щелчком мыши перейти к просмотру другого документа.

 <p style="text-indent:20px">Этот способ позволяет создавать документы для WWW без знания языка HTML. HTML-редакторы автоматизируют создание гипертекстовых документов, избавляют от рутинной работы. Однако их возможности ограничены, они сильно увеличивают размер получаемого файла и не всегда полученный с их помощью результат соответствует ожиданиям разработчика. Но, безусловно, этот способ незаменим для новичков в деле подготовки гипертекстовых документов. 

<p style="text-indent:20px">Альтернативой служит создание и разметка документа при помощи обычного редактора plain-текста (таких, как emacs или NotePad). При этом способе в текст вручную вставляются команды языка HTML. Создавая документы таким способом, вы точно знаете, что делаете. 

<p style="text-indent:20px">Как уже отмечалось, HTML-документ содержит символьную информацию. Одна ее часть - собственно текст, т. е. данные, составляющие содержимое документа. Другая - теги (markup tags), называемые также флагами разметки, - специальные конструкции языка HTML, используемые для разметки документа и управляющие его отображением. Именно теги языка HTML определяют, в каком виде будет представлен текст, какие его компоненты будут исполнять роль гипертекстовых ссылок, какие графические или мультимедийные объекты должны быть включены в документ. Графическая и звуковая информация, включаемая в HTML-документ, хранится в отдельных файлах. Программы просмотра HTML-документов (браузеры) интерпретируют флаги разметки и располагают текст и графику на экране соответствующим образом. Для файлов, содержащие HTML-документы, приняты расширения .htm или .html. 

<p style="text-indent:20px"> <u>Прописные и строчные буквы при записи тегов не различаются</u>. В большинстве случаев теги используются парами. Пара состоит из открывающего (start tag) и закрывающего (end tag) тегов. Синтаксис открывающего тега: 

                                          <p style="font-family:arial;color:red;font-size:20px;"> <имя_тега [атрибуты]> </p>

<p style="text-indent:20px">Прямые скобки, используемые в описании синтаксиса, означают, что данный элемент может отсутствовать. Имя закрывающего тега отличается от имени открывающего лишь тем, что перед ним ставится наклонная черта: 

                                              <p style="font-family:arial;color:red;font-size:20px;"> <./имя_тега> </p>

<p style="text-indent:20px">Атрибуты тега записываются в следующем формате: 

                                                   <p style="font-family:arial;color:red;font-size:20px;">имя[="значение"]</p>

<p style="text-indent:20px">Кавычки при задании значения аргумента не обязательны и могут быть опущены. Для некоторых атрибутов значение может не указываться. У закрывающего тега атрибутов не бывает. 

<p style="text-indent:20px">Действие любого парного тега начинается с того места, где встретился открывающий тег и заканчивается при встрече соответствующего закрывающего тега. Часто пару, состоящую из открывающего и закрывающего тегов, называют контейнером, а часть текста, окаймленную открывающим и закрывающим тегом, -- элементом. 

<p style="text-indent:20px">Последовательность символов, составляющая текст, может состоять из пробелов, табуляций, символов перехода на новую строку, символов возврата каретки, букв, знаков препинания, цифр, и специальных символов (например, +, #, $, @), за исключением следующих четырех символов, имеющих в HTML специальный смысл: < (меньше), > (больше), & (амперсенд) и " (двойная кавычка). Если необходимо включить в текст какой-либо из этих символов, то следует закодировать его особой последовательностью символов. 

<p style="text-indent:20px">К специальным символам можно отнести и неразрывный пробел. Использование этого символа -- один из способов увеличить расстояние между некоторыми словами в тексте. Обычные пробелы использовать для этих целей нельзя, так как группа подряд идущих пробелов интерпретируется браузером как один. 
	
<p style="text-indent:20px">Каждая из таких зарезервированных последовательностей начинается символом амперсенда (&) и заканчивается точкой с запятой (;). </i>

<table border="1">
<tr>
<th>Последовательность</th>
<th>Символ</th>
</tr>
<tr>
<td> & lt; </td>
<td> символ < </td>
</tr>
<tr>
<td> & gt; </td>
<td> символ > </td>
</tr>
<tr>
<td> & amp; </td>
<td> символ & </td>
</tr>
<tr>
<td> & quot; </td>
<td> символ " (кавычка) </td>
</tr>
<tr>
<td> & nbsp; </td>
<td> неразрывный пробел </td>
</tr>
</table> 
<hr/>

<table class="raz">
  <tr>
    <td><a href="HTML1.php">На главную</a>
    <td><a href="">____________________</a>
    <td><a href="ht2.php"><img border="0" width="100" height="50" src="primer/поворот1.png" >  </a>
  </tr>
</table>
                                     
</body>
</html>
