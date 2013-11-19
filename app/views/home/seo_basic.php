
<div id="component-category" class="component result-0  hidden hidden">
	<div class="component-head span6">

		<h3 class="simple-tooltip" data-placement="left" rel="tooltip"
			data-original-title="Low impact">[YML:category]</h3>

		<div class="icons"></div>
	</div>
	<div class="component-content span15"></div>


	<div class="delimiter span20"></div>
</div>
<div id="component-clean_url" class="component result-1 ">
	<div class="component-head span6">
		<span class="crit-score-pond hidden">0.971</span>

		<h3 class="simple-tooltip" data-placement="left" rel="tooltip"
			data-original-title="Successfully passed">URL Rewrite</h3>

		<div class="icons">
			<i class="importance-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Low impact">Low impact</i> <i
				class="solvability-2 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Hard to solve">Hard to solve</i>
		</div>
	</div>
	<div class="component-content span15">
		<div class="part text ">
			<p>
				<?php echo $seo['rewrite']?__('analyse.cleanurl'):__('analyse.nocleanurl');?>
			</p>
		</div>

	</div>


	<div class="component-advice">

		<p>
			Great! You have clean (user-friendly) URLs which do not contain query
			strings. <br> Clean URLs are not only <a rel="nofollow"
				href="http://blog.woorank.com/2013/03/a-guide-to-clean-urls-for-seo-and-usability/"
				target="_blank">SEO-friendly</a> but are also important for
			usability.
		</p>
	</div>



	<div class="delimiter span20"></div>
</div>
<div id="component-ip_canonicalization" class="component result-3 no">
	<div class="component-head span6">

		<h3 class="simple-tooltip" data-placement="left" rel="tooltip"
			data-original-title="Errors to fix">IP Canonicalization</h3>

		<div class="icons">
			<i class="importance-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Low impact">Low impact</i> <i
				class="solvability-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Easy to solve">Easy to solve</i>
		</div>
	</div>
	<div class="component-content span15">
		<div class="part text ">
			<p>No</p>
		</div>

	</div>

	<div class="component-advice">

		<p>Be careful, your server IP is not forwarding to your website's
			domain name. Search engines like Google� are now able to index your
			website with its IP instead of its domain name. This will result in
			duplicate content.</p>
		<p>To check this for your website, enter your IP address in the
			browser and see if your site loads with the IP address. Ideally, the
			IP should redirect to your website's URL or to a page from your
			website hosting provider.</p>
		<p>If it does not redirect, you should do an htaccess 301 redirect to
			make sure the IP does not get indexed.</p>
	</div>

	<div class="delimiter span20"></div>
</div>
<div id="component-robots_txt" class="component result-1 ">
	<div class="component-head span6">
		<span class="crit-score-pond hidden">1.456</span>

		<h3 class="simple-tooltip" data-placement="left" rel="tooltip"
			data-original-title="Successfully passed">robots.txt</h3>

		<div class="icons">
			<i class="importance-2 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Medium impact">Medium impact</i>
			<i class="solvability-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Easy to solve">Easy to solve</i>
		</div>
	</div>
	<div class="component-content span15">
		<div class="part text ">
			<p>
				<?php echo !empty($seo['robots'])?__('analyse.hasrobot'):__('analyse.norobot');?>
			</p>
		</div>

	</div>

	<div class="component-advice">

		<p>			
		</p>
		<p>
			A <a rel="nofollow"
				href="http://blog.woorank.com/2013/04/robots-txt-a-beginners-guide/"
				target="_blank">robots.txt file</a> allows you to restrict the
			access of search engine robots that crawl the web and it can prevent
			these robots from accessing specific directories and pages. It also
			specifies where the XML sitemap file is located.
		</p>
		<p>
			<a rel="nofollow"
				href="http://tool.motoricerca.info/robots-checker.phtml"
				target="_blank">Click here</a> to check your robots.txt file for
			syntax errors.
		</p>
	</div>

	<div class="delimiter span20"></div>
</div>
<div id="component-xml_sitemaps" class="component result-1 ">
	<div class="component-head span6">
		<span class="crit-score-pond hidden">0.971</span>

		<h3 class="simple-tooltip" data-placement="left" rel="tooltip"
			data-original-title="Successfully passed">XML Sitemap</h3>

		<div class="icons">
			<i class="importance-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Low impact">Low impact</i> <i
				class="solvability-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Easy to solve">Easy to solve</i>
		</div>
	</div>
	<div class="component-content span15">
		<div class="part text ">
			<p>
				<?php echo !empty($seo['sitemap'])?__('analyse.hassitemap'):__('analyse.nositemap');?>
			</p>
		</div>

	</div>

	<div class="component-advice">

		<p>
			
		</p>
		<p>A sitemap lists URLs that are available for crawling and can
			include additional information like your site's latest updates,
			frequency of changes and importance of the URLs. This allows search
			engines to crawl the site more intelligently.</p>
		<p>
			It is also good practice to specify your <a rel="nofollow"
				href="http://blogs.creative-jar.com/post/How-to-create-a-robotstxt-file-with-sitemap-location.aspx"
				target="_blank">sitemap's location</a> in your robots.txt file.
		</p>
	</div>

	<div class="delimiter span20"></div>
</div>
<div id="component-underscores_url" class="component result-3 ">
	<div class="component-head span6">

		<h3 class="simple-tooltip" data-placement="left" rel="tooltip"
			data-original-title="Errors to fix">Underscores in the URLs</h3>

		<div class="icons">
			<i class="importance-1 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Low impact">Low impact</i> <i
				class="solvability-2 simple-tooltip" data-placement="top"
				rel="tooltip" data-original-title="Hard to solve">Hard to solve</i>
		</div>
	</div>
	<div class="component-content span15">
		<div class="part text ">
			<p>
				<?php echo $seo['underscore']?__('analyse.hasunderscore'):__('analyse.nounderscore');?>
			</p>
		</div>

	</div>

	<div class="component-advice">

		We have detected <a rel="nofollow"
			href="http://blog.woorank.com/2013/04/underscores-in-urls-why-are-they-not-recommended/"
			target="_blank">underscores</a> (these_are_underscores) in this URL
		and/or in your in-page URLs. You should rather use hyphens
		(these-are-hyphens) to optimize your SEO. While Google� treats hyphens
		as word separators, it does not treat underscores as word separators.
	</div>

	<div class="delimiter span20"></div>
</div>
