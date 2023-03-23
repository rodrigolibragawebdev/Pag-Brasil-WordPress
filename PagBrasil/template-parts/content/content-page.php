<?php

$the_content = apply_filters("the_content", get_the_content());
if (!empty($the_content)):
  echo $the_content;
else:
   ?>
<p>Por favor, preencha o conteúdo no editor de blocos do WordPress.</p>
<?php
endif; ?>
