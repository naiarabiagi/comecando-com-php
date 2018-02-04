<?php include './componentes/cabecalho.php';?>

<div class="content-container">

  <h2>Structure</h2>

  <p class="paragrafo">A valid HTML document must necessarily follow the structure composed of the -html, -head and -body tags and the -! DOCTYPE statement.</p>

  <h3>The tag - HTML</h3>
  <p class="paragrafo">First of all, in the structure of our document, we insert an -html tag. Within this tag, you need to declare two other tags: -head and -body. These two tags are "sisters" because they are on the same hierarchical level as your "parent" tag, which is -html.
  </br>
  -html-</br>
    -head--/head-</br>
    -body--/body-</br>
  -html-</p>

  <h3>The tag - HEAD</h3>
  <p class="paragrafo">The -head tag contains information about our document that is of interest only to the browser, not to visitors to our site. This is information that will not be displayed in the document area in the browser.</p>

  <p class="paragrafo">The specification forces the presence of the -title content tag within our -head, allowing you to specify the title of our document, which will usually be displayed in the title bar of the browser window or in the document's tab.</p>

  <p class="paragrafo">Another widely used configuration, especially in documents whose content is written in a language such as Portuguese, which has characters like accents and cedilla, is the encoding configuration of characters, called encoding or charset.</p>

  <p class="paragrafo">We can configure which encoding we want to use in our document by setting charset in the -meta tag. One of the most common values ​​used today is UTF-8, also called Unicode. There are other possibilities, such as latin1, long used in the past.</p>

  <p class="paragrafo">UTF-8 is the current recommendation for web encoding because it is widely supported in browsers and code editors, as well as being compatible with virtually every language in the world. This is what we will use in the course.
  </br>
  -html-</br>
      -head</br>
          -title .. -title</br>
          -meta charset = "utf-8"</br>
      -head</br>
      -body</br>

      -body</br>
  -html</br></p>

  <h3>The tag - BODY</h3>
  <p class="paragrafo">The <body> tag contains the body of our document, which is displayed by the browser in its window. It is necessary for <body> to have at least one "child" element, that is, one or more HTML tags inside it.
  </br>
  -html</br>
    -head</br>
      -title .. -title</br>
      -meta charset = "utf-8"</br>
    -head</br>
    -body</br>
      -h1 ... -h1</br>
     -body</br>
  -html</p></br>
  <p class="paragrafo">In this example, we use the -h1 tag, which indicates a title.</p>

</div>

<?php include './componentes/rodape.php';?>
