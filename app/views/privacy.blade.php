@extends('layout')

@section('content')

	<div class="container" id="main">

		<h2>Privacy Policy</h2>
		<p class="statement">Your privacy is critically important to us. At {{ $company_name }} we have a few fundamental principles:</p>
		<ul>
			<li>We don’t ask you for personal information unless we truly need it. (We can’t stand services that ask you for things like your gender or income level for no apparent reason.)
			</li>
			<li>
				We don’t share your personal information with anyone except to comply with the law, develop our products, or protect our rights.
			</li>
			<li>
				We don’t store personal information on our servers unless required for the on-going operation of one of our services.
			</li>
			<li>
				In our blogging products, we aim to make it as simple as possible for you to control what’s visible to the public, seen by search engines, kept private, and permanently deleted.
			</li>
		</ul>

		<p>Below is our privacy policy which incorporates these goals:</p>

		<p>If you have questions about deleting or correcting your personal data please contact our support team.</p>

		<p>It is Time Log's policy to respect your privacy regarding any information we may collect while operating our websites.</p>

		<h3>Website Visitors</h3>
		<p>Like most website operators, {{ $company_name }} collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. {{ $company_name }}’s purpose in collecting non-personally identifying information is to better understand how {{ $company_name }}’s visitors use its website. From time to time, {{ $company_name }} may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>

		<p>{{ $company_name }} also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on WordPress.com blogs. {{ $company_name }} only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below, except that blog commenter IP addresses and email addresses are visible and disclosed to the administrators of the blog where the comment was left.</p>

		<h3>Gathering of Personally-Identifying Information</h3>
		<p>Certain visitors to {{ $company_name }}’s websites choose to interact with {{ $company_name }} in ways that require {{ $company_name }} to gather personally-identifying information. The amount and type of information that {{ $company_name }} gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at <a href="http://www.wordpress.com/">WordPress.com</a> to provide a username and email address. Those who engage in transactions with {{ $company_name }} – by purchasing access to the Akismet comment spam prevention service, for example – are asked to provide additional information, including as necessary the personal and financial information required to process those transactions. In each case, {{ $company_name }} collects such information only insofar as is necessary or appropriate to fulfill the purpose of the visitor’s interaction with {{ $company_name }}. {{ $company_name }} does not disclose personally-identifying information other than as described below. And visitors can always refuse to supply personally-identifying information, with the caveat that it may prevent them from engaging in certain website-related activities.</p>

		<h3>Aggregated Statistics</h3>
		<p>{{ $company_name }} may collect statistics about the behavior of visitors to its websites. For instance, {{ $company_name }} may monitor the most popular blogs on the WordPress.com site or use spam screened by the Akismet service to help identify spam. {{ $company_name }} may display this information publicly or provide it to others. However, {{ $company_name }} does not disclose personally-identifying information other than as described below.</p>

		<h3>Protection of Certain Personally-Identifying Information</h3>
		<p>{{ $company_name }} discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on {{ $company_name }}’s behalf or to provide services available at {{ $company_name }}’s websites, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using {{ $company_name }}’s websites, you consent to the transfer of such information to them. {{ $company_name }} will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, {{ $company_name }} discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when {{ $company_name }} believes in good faith that disclosure is reasonably necessary to protect the property or rights of {{ $company_name }}, third parties or the public at large. If you are a registered user of an {{ $company_name }} website and have supplied your email address, {{ $company_name }} may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what’s going on with {{ $company_name }} and our products. We primarily use our various product blogs to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. {{ $company_name }} takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>

		<h3>Cookies</h3>
		<p>A cookie is a string of information that a website stores on a visitor’s computer, and that the visitor’s browser provides to the website each time the visitor returns. {{ $company_name }} uses cookies to help {{ $company_name }} identify and track visitors, their usage of {{ $company_name }} website, and their website access preferences. {{ $company_name }} visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using {{ $company_name }}’s websites, with the drawback that certain features of {{ $company_name }}’s websites may not function properly without the aid of cookies.</p>

		<h3>Business Transfers</h3>
		<p>If {{ $company_name }}, or substantially all of its assets, were acquired, or in the unlikely event that {{ $company_name }} goes out of business or enters bankruptcy, user information would be one of the assets that is transferred or acquired by a third party. You acknowledge that such transfers may occur, and that any acquirer of {{ $company_name }} may continue to use your personal information as set forth in this policy.</p>

		<h3>Ads</h3>
		<p>Ads appearing on any of our websites may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by {{ $company_name }} and does not cover the use of cookies by any advertisers.</p>

		<h3>Comments</h3>
		<p>Comments and other content submitted to our Akismet anti-spam service are not saved on our servers unless they were marked as false positives, in which case we store them long enough to use them to improve the service to avoid future false positives.</p>

		<h3>Privacy Policy Changes</h3>
		<p>Although most changes are likely to be minor, {{ $company_name }} may change its Privacy Policy from time to time, and in {{ $company_name }}’s sole discretion. {{ $company_name }} encourages visitors to frequently check this page for any changes to its Privacy Policy. If you have a WordPress.com account, you should also check your blog’s dashboard for alerts to these changes. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>

		<em>This privacy policy was derived from <a href="http://automattic.com/privacy/">Automattic</a></em>
	</div>

@stop