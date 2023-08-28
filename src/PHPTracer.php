<?php


namespace PHPTracer;


class PHPTracer {

  private $devneet = 'data:image/png;base64, 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';


  public function run( $dataToDebug ) {
    $Data = $dataToDebug;
    $Data = $this->stream( $Data );
    $Data = $this->declare( $Data );
    $Data = $this->element( $Data );
    echo $this->interface( $Data );
    die; exit;
  }

  public function interface( $ElementReady ) {
    $face = [];
    
    $face[] = '<div tracer>';
    $face[] = $this->style();
      $face[] = '<div tracer-sidebar>';
        $face[] = '<h1>PHP Tracer</h1>';
        $face[] = '<h6 c-grey> Follow me if you like my stuff : Anwar Achilles</h6>';
      $face[] = '</div>';
      $face[] = '<div tracer-content>';
        $face[] = $ElementReady;
      $face[] = '</div>';
      $face[] = '<div tracer-footer>';
        $face[] = '<h6>Project|PHP Tracer <img src="'.$this->devneet.'" width="20px"/></h6>';
      $face[] = '</div>';
    $face[] = $this->script();
    $face[] = '</div>';

    return implode('', $face);
  }

  public function declare( $data ) {
    $data = str_replace("=>", '', $data);
    $data = str_replace("]\n", ']', $data);
    $data = str_replace("]  ", ']', $data);
    $data = str_replace("]  ", ']', $data);
    $data = str_replace("]  ", ']', $data);
    $data = str_replace("]  ", ']', $data);
    $data = str_replace("  ", "@-tab", $data);
    $data = str_replace('@-tab[', '@-tab[@name-start', $data);
    $data = str_replace('@-tab[@name-start"', '@-tab[@name-start', $data);
    $data = str_replace('":protected', '@protected', $data);
    $data = str_replace('":private', '@private', $data);
    $data = str_replace('":"', '@class-separator', $data);
    $data = str_replace('"]string', '@name-end @string', $data);
    $data = str_replace(']string', '@name-end @string', $data);
    $data = str_replace('"]NULL', '@name-end @null', $data);
    $data = str_replace(']NULL', '@name-end @null', $data);
    $data = str_replace('"]array', '@name-end @array', $data);
    $data = str_replace(']array', '@name-end @array', $data);
    $data = str_replace('"]&array', '@name-end @array', $data);
    $data = str_replace(']&array', '@name-end @array', $data);
    $data = str_replace('"]object', '@name-end @object', $data);
    $data = str_replace(']object', '@name-end @object', $data);
    $data = str_replace('"]&object', '@name-end @object', $data);
    $data = str_replace(']&object', '@name-end @object', $data);
    $data = str_replace(']int', '@name-end @integer', $data);
    $data = str_replace(']float', '@name-end @float', $data);
    $data = str_replace(']bool', '@name-end @boolean', $data);
    $data = str_replace("@-tab[", '∷', $data);
    $data = str_replace("@-tab}", '╰┄⬦@collapse-end', $data);
    $data = str_replace(') {', ')@collapse-button@collapse-start', $data);
    $data = str_replace("@-tab", '│ ', $data);
    $data = substr_replace($data, '@tracer-header', 0, 0);
    $data = substr($data, 0, -2);

    // $data = explode("\n", $data);
    // $Renumber = [];
    // foreach ($data as $number=>$pass) {
    //   $Renumber[] = "@number-start".$number."@number-end:".$pass;
    // }
    // $data = implode("\n", $Renumber);

    return $data;
  }

  public function element( $data ) {
    $data = str_replace('@name-start', '<h3 bold>', $data);
    $data = str_replace('@name-end', '</h3>', $data);
    $data = str_replace('@protected', ' <span small c-orange>protected</span>', $data);
    $data = str_replace('@private', ' <span small c-orange>private</span>', $data);
    $data = str_replace('@null', '<span small c-grey>NULL</span> ', $data);
    $data = str_replace('@string', '<span small c-grey>string</span> ', $data);
    $data = str_replace('@integer', '<span small c-grey>integer</span> ', $data);
    $data = str_replace('@array', '<span small c-grey>array</span> ', $data);
    $data = str_replace('@float', '<span small c-grey>float</span> ', $data);
    $data = str_replace('@object', '<span small c-grey>object</span> ', $data);
    $data = str_replace('@boolean', '<span small c-grey>boolean</span> ', $data);
    $data = str_replace('@collapse-button', '<button collapse-button onclick="tracerCollapse(this)">◈</button>', $data);
    $data = str_replace('@collapse-start', '<div collapse="false">', $data);
    $data = str_replace('@collapse-end', '</div>', $data);
    $data = str_replace('∷', '<span c-red bold>∷</span>', $data);
    $data = str_replace('╰┄⬦', '<span c-grey f-normal>╰┄⬦</span>', $data);
    $data = str_replace('│ ', '<span c-grey f-normal>│ </span>', $data);
    $data = str_replace('@class-separator', '<span c-red>⌥</span>', $data);
    $data = str_replace('@tracer-header', '<h3 c-grey>Watching it.. <span c-red>∷∷∷</span> </h3>', $data);
    $data = str_replace('@number-start', '<span tracer-number c-grey>', $data);
    $data = str_replace('@number-end:', '</span>', $data);
    return $data;
  }

  public function style() { ?>
    <style>
      [tracer] {
        position: relative;
        color: #D0D0D0;
        background-color: #1F1F1F;
        border-radius: 3px;
        box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
        padding: 10px 20px;
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 20px;
        white-space: pre;
        font-family: monospace;
        font-size: 12px;
        line-height: 1rem;
        overflow: auto;
      }
      [tracer-footer] {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 5px 10px;
      }
      [tracer-content] {
        padding: 10px 0;
      }
      [tracer-number] {
        width: 30px;
      }
      [tracer] span { display: inline-block; }
      [tracer] h1, [tracer] h2,
      [tracer] h3, [tracer] h4,
      [tracer] h5, [tracer] h6 {
        margin: 0 !important;
        display: inline-block;
        line-height: 1rem;
      }
      [tracer] [c-red] { color: #e01f1e; }
      [tracer] [c-grey] { color: grey; }
      [tracer] [c-orange] { color: #FFA053; }
      [tracer] [c-jasmine] { color: #FCDE73; }
      [tracer] [c-grid] { color: #393939; }
      [tracer] [c-info] { color: #6AD9FD; }
      [tracer] [bold] { font-weight: bold; }
      [tracer] [f-bold] { font-weight: bold; }
      [tracer] [f-normal] { font-weight: normal; }
      [tracer] [small] { font-size: 0.6rem; }
      [tracer] [f-small] { font-size: 0.6rem; }
      [tracer] [collapse] {
        padding: -100px;
        display: block;
        margin-top: -15px;
        margin-bottom: -15px;
      }
      [tracer] [collapse-button] {
        background: none;
        color: grey;
        border: none;
        margin: -10px auto;
        /* display: inline-block; */
      }
      [tracer] [collapse-button]:hover {
        cursor: pointer;
        color: #C63737;
      }
      [tracer] [collapse="false"] {
        display: none;
      }
      [tracer] [collapse="true"] {
        display: block;
      }
    </style>
  <?php }

  public function script() { ?>
    <script>
      function tracerCollapse( button ) {
        const target = button.nextElementSibling;
        if (target.getAttribute("collapse")==="true") {
          target.setAttribute("collapse", "false");
        }else {
          target.setAttribute("collapse", "true");
        }
      }    
    </script>
  <?php }

  public function object_parse( $data ) {
    $data = $this->stream($data);

    $data = str_replace("=>", '', $data);
    $data = str_replace("]\n", ']', $data);

    $data = str_replace("]  ", ']', $data);
    $data = str_replace("]  ", ']', $data);
    $data = str_replace("]  ", ']', $data);
    $data = str_replace("]  ", ']', $data);

    $data = str_replace("  ", "@-tab", $data);

    $data = str_replace('@-tab[', '@-tab[@name-start', $data);
    $data = str_replace('@-tab[@name-start"', '@-tab[@name-start', $data);
    $data = str_replace('":protected', '@protected', $data);
    $data = str_replace('":private', '@private', $data);
    $data = str_replace('":"', '<span c-red>⌥</span>', $data);
    $data = str_replace(']string', '@name-end @string', $data);
    $data = str_replace(']NULL', '@name-end @null', $data);
    $data = str_replace(']array', '@name-end @array', $data);
    $data = str_replace(']object', '@name-end @object', $data);
    $data = str_replace(']int', '@name-end @integer', $data);
    $data = str_replace(']float', '@name-end @float', $data);
    $data = str_replace(']bool', '@name-end @boolean', $data);
    
    $data = str_replace("@-tab[", '∷', $data);
    $data = str_replace("@-tab}", '╰┄⬦@collapse-end', $data);
    $data = str_replace(') {', ') @collapse-button@collapse-start', $data);
    $data = str_replace("@-tab", '│ ', $data);




    $data = str_replace('@name-start', '<h3 bold style="display:inline-block; ">', $data);
    $data = str_replace('@name-end', '</h3>', $data);

    $data = str_replace('@protected', ' <span small c-orange>protected</span>', $data);
    $data = str_replace('@private', ' <span small c-orange>private</span>', $data);
    
    $data = str_replace('@null', '<span small c-grey>NULL</span> ', $data);
    $data = str_replace('@string', '<span small c-grey>string</span> ', $data);
    $data = str_replace('@integer', '<span small c-grey>integer</span> ', $data);
    $data = str_replace('@array', '<span small c-grey>array</span> ', $data);
    $data = str_replace('@float', '<span small c-grey>float</span> ', $data);
    $data = str_replace('@object', '<span small c-grey>object</span> ', $data);
    $data = str_replace('@boolean', '<span small c-grey>boolean</span> ', $data);

    $data = str_replace('@collapse-button', '<button collapse-button onclick="tracerCollapse(this)">⬦</button>', $data);
    $data = str_replace('@collapse-start', '<div collapse="false">', $data);
    $data = str_replace('@collapse-end', '</div>', $data);

    $data = str_replace('∷', '<span c-red bold>∷</span>', $data);
    $data = str_replace('╰┄⬦', '<span c-grey f-normal>╰┄⬦</span>', $data);
    $data = str_replace('│ ', '<span c-grey f-normal>│ </span>', $data);
    
    $data = substr($data, 0, -2);
    return $data;
  }

  public function stream( $data ) {
    // Buat buffer sementara
    ob_start();
    // Stream var_dump ke buffer
    var_dump($data);
    // Ambil isi buffer ke dalam variabel
    return ob_get_clean();
  }

  public function pattern( $data, $pattern, $callback ) {
    preg_match($pattern, $data, $matches);
    $nextdata = preg_replace($pattern, '', $data);
    return $callback($matches, nl2br($nextdata));
  }
  
}