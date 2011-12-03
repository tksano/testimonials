<% require css(testimonials/css/testimonials.css) %>
<div class="widget_testimonials">
	<% control Testimonials %>
	<div class="widget_testimonial">
		<p class="text">$Quote</p>
		<p class="name">&mdash; $Name</p>
	</div>
<% end_control %>
	<div class="btn"><a href="$TestimonialPage.Link">
      <img src="/themes/harvesttime/images/common/sideall_btn.gif" width="82" height="29" alt="全て見る" class="imgover" />
  </a></div>
</div>