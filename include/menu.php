<script type="text/javascript">

$('a[href="index.php"]').click(function() {
    alert('works');
});  


  $("a[href='Javascript.php']").click(function(){

window.location.href = "Javascript.php";

  });


</script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Practise</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Ajax <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Ajax_insert.php">Ajax Insert</li>
            <li><a href="Ajax_fileupload.php">Ajax Fileupload</a></li>
            <li><a href="Ajax_serialize.php">Jquery serialize</a></li>
            <li><a href="Ajax_serializeArray.php">Jquery serializeArray</a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">JQUERY<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="jquery_addclass.php">Addclass</li>
            <li><a href="jquery_tab.php">Tab</a></li>
            <li><a href="jquery_addtocard.php">Addtocard</a></li>
          </ul>
        </li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="JSON.php">JSON <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Json_from_back_end.php">Json_from_back_end.php</a></li>
            <li><a href="Json_Object.php">Json_Object</a></li>
          
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="php_start.php">PHP <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="php_array.php">Array</a></li>
            <li><a href="php_array_of_object.php">PHP Array object</a></li>
            <li><a href="php_foreach.php">For Each</a></li>
            <li><a href="php_xml.php">PHP XML</a></li>
            <li><a href="Json_Object.php">Json_Object</a></li>

            <li><a href="php_serialize_array.php">Serialize Array</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="php_start.php">PHP OOPS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="oops_simple.php">Simple Class</a></li>
            <li><a href="opps_Static.php">Static</a></li>
            <li><a href="oops_construct.php">Construct</a></li>
            <li><a href="oops_inheritance.php">Inheritance</a></li>
            <li><a href="oops_abstract.php">Abstract</a></li>
            <li><a href="oops_interface.php">Interface</a></li>
            <li><a href="oops_parent::__construct().php">parent::__construct()</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Logical<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="lg_oddsum.php">Sum Of Odd No</a></li>
            <li><a href="lg_febbonacci.php">Febbonacci</a></li>
            <li><a href="lg_factorial.php">Factorial</a></li>
            <li><a href="lg_sum_of_natural.php">Sum of Natural Num</a></li>
            <li><a href="lg_increment.php">Increment</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
