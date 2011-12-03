<% require css(testimonials/css/testimonials.css) %>
<% require javascript(testimonials/javascript/jquery.toggle.js) %>

<div id="contents">
	
	<div id="menuLeft">
		<% include Sidebar %>
	</div>
	
	<div id="Main">
		
		<% include BreadCrumbs %>
		
		<div class="typography">
			
			<div class="hgroup_h2">
				<div class="head">
				<h2>$Title</h2>
				</div>
			</div>
			
			$Content
			
      <% if Testimonials %>
      <div id="Testimonials">

        <% control Testimonials %>
        <div class="testimonial">
          <blockquote>
            <p class="quote">$Quote</p>
            <% if FullText %>
            <div class="toggle">$FullText</div>
            <% end_if %>
          </blockquote>
          <p class="name">&mdash; $Name</p>
        </div>
        <% end_control %>

      </div>
      <% end_if %>

    </div><!-- typography end -->
	
	</div><!-- Main end -->
	
	<div id="aside">
		<% include PageAds %>
		<% include Widgetbar %>
	</div>
	
</div><!-- contents end -->
