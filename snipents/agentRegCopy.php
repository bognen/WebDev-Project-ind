<?php echo
"<div id=\"addAgent\">
  <h4 id=\"addAgentHeader\">Enter New Agent's Info</h4>
  <form id=\"addAgentForm\" name=\"addAgentForm\" method=\"POST\" action=\"test.php\">

      <div class=\"row\">
        <label  class=\"agentLabel\" class=\"form-group col-md-4\">First Name</label>
        <input type=\"text\" class=\"form-control\" class=\"form-group col-md-8\"
        name=\"AgtFirstName\" id=\"AgtFirstName\" placeholder=\"Enter your Agent's First Name\"/>
      </div>
      <div class=\"row\">
        <label class=\"agentLabel\" class=\"form-group col-md-4\">Middle Initials</label>
        <input type=\"text\" class=\"form-control\" class=\"form-group col-md-8\"
        name=\"AgtMiddleInitial\" id=\"AgtMiddleInitial\" placeholder=\"Enter your Agent's Middle Initial\"/>
      </div>
      <div class=\"row\">
        <label class=\"agentLabel\" class=\"form-group col-md-4\">Last Name</label>
        <input type=\"text\" class=\"form-control\" class=\"form-group col-md-8\"
        name=\"AgtLastName\" id=\"AgtLastName\" placeholder=\"Enter your Agent's Last Name\"/>
      </div>
      <div class=\"row\">
        <label class=\"agentLabel\" class=\"form-group col-md-4\">Business Phone</label>
        <input type=\"text\" class=\"form-control\" class=\"form-group col-md-8\"
        name=\"AgtBusPhone\" id=\"AgtBusPhone\" placeholder=\"Enter your Agent's Business Phone\"/>
      </div>
      <div class=\"row\">
        <label class=\"agentLabel\" class=\"form-group col-md-4\">Email</label>
        <input type=\"text\" class=\"form-control\" class=\"form-group col-md-8\"
        name=\"AgtEmail\" id=\"AgtEmail\" placeholder=\"Enter your Agent's Email\"/>
      </div>
      <div class=\"row\">
        <label class=\"agentLabel\" class=\"form-group col-md-4\">Title</label>
        <input type=\"text\" class=\"form-control\" class=\"form-group col-md-8\"
        name=\"AgtPosition\" id=\"AgtPosition\" placeholder=\"Enter your Agent's Title\"/>
      </div>


        <input class=\"btn btn-primary btn-lg pull-right\" type=\"submit\" name=\"agentSubmit\" id=\"agentSubmit\" value=\"Register\"  />

  </form>
</div>"
?>
