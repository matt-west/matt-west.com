<?php
	$title = "Hire Matt West - Freelance Developer";

	require_once('templates/_header.php');
?>

<section id="hire-me" class="clearfix">
	<h1 class="container">Hire Me</h1>

	<div class="container no-padding clearfix">

		<div class="col">
			<section class="no-top-margin">
        <h2>Availability</h2>
        <p>
          I am currently <strong>available</strong> for new projects starting in <strong>January 2014</strong>.
        </p>
        <p>
          Please use the enquiry form on this page to contact me about future projects. I aim to reply within one working day.
        </p>
      </section>
  
			<section>
        <h2>How I Work</h2>
        <p>
          I mainly work remotely but I'm happy to travel for meetings or work in-house if necessary.
        </p>
        <p>
          I've used most of the popular project management tools (Basecamp, Trello, Sprint.ly, Pivotal Tracker, etc.) and I'm proficient in using Git and Subversion for version control.
        </p>
        <p>
          Sublime Text and iTerm are my tools of choice.
        </p>
      </section>

		  <section class="no-margin">
        <h2>Rates</h2>
        <p>
          My hourly rate is <strong>&pound;40 + VAT</strong>.
        </p>
        <p>
          Full days (8 hours) are charged at <strong>&pound;320 + VAT</strong>.
        </p>
        <p>
          * Customers outside Europe may not be charged VAT.
        </p>
      </section>
		</div>

		<div class="col">
			<section class="no-top-margin no-margin">
        <h2>Lets Talk...</h2>
  
        <form id="enquiryForm" name="form1" method="POST" action="https://mattwest.wufoo.com/forms/z7x4m1/#public">
          <div class="field">
            <label for="firstName">First Name <span class="required">*</span></label>
            <input type="text" name="Field17" id="firstName" autofocus required>
          </div>
  
          <div class="field">
            <label for="lastName">Last Name <span class="required">*</span></label>
            <input type="text" name="Field18" id="lastName" required>
          </div>
  
          <div class="field">
            <label for="company">Company</label>
            <input type="text" name="Field2" id="company">
          </div>
  
          <div class="field">
            <label for="email">Email <span class="required">*</span></label>
            <input type="email" name="Field5" id="email" required>
          </div>
  
          <div class="field">
            <label for="phone">Phone</label>
            <input type="tel" name="Field7" id="phone">
          </div>
  
          <div class="field select-field">
            <label for="type">I'm writing because...</label>
            <select id="type" name="Field8" required>
              <option>I have a project for you</option>
              <option>I have a question</option>
              <option>I just wanted to say hi</option>
            </select> .  <span class="required">*</span>
          </div>
  
          <div class="field">
            <label for="message">Message  <span class="required">*</span></label>
            <textarea id="message" name="Field9" required></textarea>
          </div>
  
          <div class="field submit-field">
            <div class="required required-note">* Required Field</div>
            <button type="submit" id="submit" name="saveForm" class="btn btn-blue">Deploy Communication</button>
          </div>
  
          <input type="hidden" id="idstamp" name="idstamp" value="omZ75qcgdoYDNhjs30MfjMoBErzC4NjT2q33iYYiN50=" />
        </form>
      </section>
		</div>
	</div>

</section>

<?php require_once('templates/_footer.php'); ?>