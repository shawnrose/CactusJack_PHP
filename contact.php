<?php
$title = "Cactus Jack Music | Contact";

$pagecontent = '

 <div id="col1" class="left">
                    <h1></h1>
                    <form action="mailto:shawnkrose@gmail.com" enctype="text/plain" method="post" name="contact">
                        <fieldset><legend><p>Contact Cactus Jack</p></legend>
                        <p>Name</p>
                        <p>
                        <input name="name" type="text" />
                        </p>
                        <p>&nbsp;</p>
                        <p>email Address</p>
                        <p>
                        <label for="email"></label>
                        <input type="text" name="email" id="email" />
                        </p>
                        <p>&nbsp;</p>
                            <textarea rows="4" cols="50">Talk to us!
                            </textarea>
                        <p>Email List:<br />
                        <input name="mailList" type="radio"  value="joinMail" checked="checked" />
                        Sign Up For Our Mailing List<br />
                        <input type="radio" name="mailList" value="noJoinMail" />
                        Do not sign me up for Mailing List</p>
                        <p><br />
                        </p>
                        <p>What is your affiliation</p>
                        <p>
                        <select  name="geographic">
                            <option>Choose One</option>
                            <option>Fan</option>
                            <option>Club Owner</option>
                            <option>Promoter</option>
                            <option>Other</option>
                        </select>
                        </p>
                        <p>&nbsp;</p>
                         <p><input name="Submit" type="submit" value="Get Rowdy!" />&nbsp;<input name="Reset1" type="reset" value="Cancel" /></p>
                        </fieldset>
                    </form>
                </div>
            <div id="col2" class="right" >
                <h3>Booking:</h3>
                 <p>Cactus Jack Management</p>
                <p>Chris Wood</p>
                 <p>(817) 559-1729</p>
				  <br /><br />
                <h3>Webmaster/Promotional Needs:</h3>
                 <p>Ramblin Rose Design</p>
                 <a href="mailto:roserambleson@gmail.com">Email Ramblin Rose</a>
            </div>
';


@include 'masterpage/template.php';

?>