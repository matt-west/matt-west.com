<?php
	$title = "Portfolio - Matt West - Entrepreneur and Web Developer";

	require_once('templates/_header.php');
?>

<section id="portfolio" class="clearfix">

	<h1 class="container">Portfolio</h1>

	<div class="container no-padding clearfix">

		<div class="portfolio-item clearfix">
			<div class="col">
				<h2>Love Hate Films</h2>
				<p>
          Love Hate Films approached me to build a custom website to replace their old WordPress-based movie reviews site.
        </p>
        <p>
          I created a site built on Ruby on Rails that uses a points-based gamification strategy to keep users engaged.
        </p>
        <p>
          The client was really pleased with how the site turned out and now plans to expand into different verticals such as gaming.
        </p>
        <p>
          This project involved using: HTML5, CSS3, JavaScript, Ruby on Rails and Responsive Design.
        </p>
        <p>
          <a href="http://lovehatefilms.com" target="_blank">Visit the Love Hate Films Website</a>
				</p>
			</div>
			<div class="col">
				<img src="/assets/img/portfolio/lovehatefilms.png" alt="Love Hate Films Website">
			</div>
		</div>

		<div class="portfolio-item clearfix">
			<div class="col">
				<h2>HTML5 Foundations</h2>
				<p>
          To support the release of my first book (<a href="http://html5foundations.com" title="HTML5 Foundations by Matt West" target="_blank">HTML5 Foundations</a>) I created a simple one-page promotional website that acts as a landing page to entice in potential readers when they search for the book.
        </p>
        <p>
          The website was designed to be inline with Treehouse's brand identity and uses a bespoke fluid grid system to allow the layout to be responsive to different screen sizes. The site looks just as fantastic on mobile devices as it does on laptop and desktop computers.
        </p>
        <p>
          The HTML5 Foundations website makes use of HTML5, CSS3 and JavaScript to create an enjoyable in-browser experience, all on a single web page.
        </p>
        <p>
          <a href="http://html5foundations.com" target="_blank" class="visit-link">Visit the HTML5 Foundations Website</a>
        </p>
			</div>
			<div class="col">
				<img src="/assets/img/portfolio/html5foundations.png" alt="HTML5 Foundations">
			</div>
		</div>

		<div class="portfolio-item clearfix">
			<div class="col">
				<h2>wlcome</h2>
				<p>
				  I worked with the team at wlcome to design and develop a brand new website to showcase their mobile loyaty ptoduct aimed at coffee shops.
        </p>
        <p>
          The design and development was undertaken by myself.
          Copywriting and information architecture was completed in conjunction with the team at wlcome.
        </p>
        <p>
          This project involved: HTML5, CSS3, JavaScript, Responsive Design and GO.
				</p>
				<p>
				  <a href="http://wlco.me" target="_blank">Visit the wlcome Website</a>
				</p>
			</div>
			<div class="col">
				<img src="/assets/img/portfolio/wlcome.png" alt="wlcome">
			</div>
		</div>

		<div class="portfolio-item clearfix">
			<div class="col">
				<h2>LOCARN</h2>
				<p>
          LOCARN approached me to build a website that could handle orders for their timed delivery service. I designed and developed a Ruby on Rails application with a promotional website, customer portal and admin interface.
        </p>
        <p>
          The admin interface is used to manage parcels as they pass through LOCARN's internal processes. It tracks a parcel from the minute it arrives at the depot right through to it being delivered to the customer.
        </p>
        <p>
          Customers can log in to the customer portal to select a time slot that they would like their parcel to be delivered in and then pay. Slots are presented in hourly segments. The slot picker is backed by a bespoke route optimiser to ensure that LOCARN can indeed deliver the parcel at the time requested, taking into account any current inventory and orders. Customers can also use the portal to track active parcels, access their delivery and billing history and manage multiple delivery addresses.
        </p>
        <p>
          This project involved using the following technologies: Ruby on Rails (with RSpec Automated Testing), Task Queues, HTML5, CSS3, JavaScript and the TxtLocal SMS Service API.
        </p>
			</div>
			<div class="col">
				<img src="/assets/img/portfolio/locarn.png" alt="LOCARN">
			</div>
		</div>

		<div class="portfolio-item clearfix">
			<div class="col">
				<h2>Init Photography</h2>
				<p>
          Johanna from Init Photography approached me earlier this year to design and build a website for her new photography business. She wanted something that was simple but effective.
        </p>
        <p>
          Using a combination of PHP, HTML5, CSS3 and JavaScript I designed Johnanna a website that captures the simplistic and honest character of her business.
        </p>
        <p>
          <a href="http://initphotography.co.uk" target="_blank" class="visit-link">Visit the Init Photography Website</a>
        </p>
			</div>
			<div class="col">
				<img src="/assets/img/portfolio/init-photography.png" alt="init Photography">
			</div>
		</div>

	</div>

</section>

<?php require_once('templates/_footer.php'); ?>
