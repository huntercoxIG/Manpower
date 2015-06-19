<?php get_template_part('includes/header'); ?>
<div class="container-fluid banner <?php 
  /* uses the post id to get the page slug and echos in class name for dynamic banner css on a per page basis */
  $post_id = get_the_ID();

  $post = get_post($post_id);
  $slug = $post->post_name;

  echo $slug; ?>">
  <h2 class="text-center"><?php the_title()?></h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">
      <div id="content" role="main" class="privacy-content">
        <?php get_template_part('includes/loops/content', 'page'); ?>

        <div class="panel-group privacy-tabs" id="accordion">
          <!-- Panel 1 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#collapse1" data-toggle="collapse" data-parent="#accordion">Information We Collect and How We Use It</a></h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">

                <strong>Personal Information</strong>
                  <br><br>
                <p>
                  Personal information that we collect may include your name, address, telephone number, and email. ManpowerGroup collects, processes, and discloses sensitive personal information, such as Social Security Numbers, only if required to comply with legal obligations, if there is a compelling business reason to do so, or with your consent.<br><br>
                  We collect and process your personal information for the following purposes where necessary:

                  <ul>
                    <li>to maintain our contractual or business relationship with you,</li>
                    <li>for employment-related services where applicable,</li>
                    <li>to tell you about the products and services we offer,</li>
                    <li>to contact and correspond with you,</li>
                    <li>for the management and defense of legal claims and actions, compliance with court orders and other legal obligations and regulatory requirements, and as otherwise permitted by law.</li>
                  </ul>
                  <br>
                  ManpowerGroup may disclose your personal information for these purposes to other ManpowerGroup entities, affiliates, suppliers, subcontractors who perform services on our behalf, clients if you are seeking employment, an acquiring organization if ManpowerGroup is involved in the sale or transfer of some or all of its business, and where we are otherwise required to do so, such as by court order.<br>
                  Personal information pertaining to you may be transferred outside of the United States and outside of countries that are recognized by the European Union as having the laws guaranteeing an adequate level of protection. In each case, ManpowerGroup has taken steps to ensure that all information transferred receives an adequate level of data protection.
                </p>
              </div>
            </div>
          </div>
          <!-- Panel 2 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#collapse2" data-toggle="collapse" data-parent="#accordion">Information Collected Automatically</a></h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  ManpowerGroup may use non-personal information to create aggregate tracking information reports regarding Web Site user demographics and the use of the Web Site, and then provide those reports to others. None of the tracking information in the reports is connected to the identities or other personal information of individual users.
                  <br><br>
                  <em>Non-Identifiable Information</em> - Like many other Web sites, the Web Site automatically collects certain non-identifiable information regarding Web Site users, such as the Internet Protocol (IP) address of your computer, the IP address of your Internet Service Provider, the date and time you access the Web Site, the Internet address of the Web site from which you linked directly to the Web Site, the operating system you are using, the sections of the Web Site you visit, the Web Site pages accessed and information viewed., and the materials you post to or download from the Web Site. This non-identifiable information is used for Web Site and system administration purposes and to improve the Web Site. Your non-identifiable information may be disclosed to others and permanently archived for future use.
                  <br><br>
                  <em>Cookies</em> - The Web Site uses "cookies", a technology that installs information on a Web Site user's computer to permit the Web Site to recognize future visits using that computer. Cookies enhance the convenience and use of the Web Site. For example, the information provided through cookies is used to recognize you as a previous user of the Web Site, to track your activity at the Web Site in order to respond to your needs, to offer personalized Web page content and information for your use, to automatically populate online forms with your personal information for your convenience, and to otherwise facilitate your Web Site experience.
                  <br><br>
                  Advertisements displayed on the Web Site may also contain cookies or other technologies. Those advertisements may be provided by third party advertising companies, and ManpowerGroup does not have any control over, or any responsibility or liability for, the cookies or other technologies used in the advertisements or for the use and disclosure of information collected through advertisement cookies.
                  <br><br>
                  You may choose to decline cookies if your browser permits, but doing so may affect your use of the Web Site and your ability to access or use certain Web Site features.
                </p>
              </div>
            </div>
          </div>
          <!-- Panel 3 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#collapse3" data-toggle="collapse" data-parent="#accordion">Security</a></h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  We work to keep our servers, applications and databases secure and free from unauthorized access and use, by using physical, administrative and technological measures to protection the information we maintain. Unfortunately, no one can guarantee 100% security. If you have particular security concerns about certain personal information, please do not transmit that information over the Internet.
                </p>
              </div>
            </div>
          </div>
          <!-- Panel 4 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#collapse4" data-toggle="collapse" data-parent="#accordion">Links</a></h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  The Web Site may contain links to other Web sites or Internet resources. When you click on one of those links you are contacting another Web site or Internet resource that may collect information about you voluntarily or through cookies or other technologies. ManpowerGroup has no responsibility, liability for, or control over those other Web sites or Internet resources or their collection, use and disclosure of your personal information. You should review the privacy policies of those other Web sites and Internet resources to understand how they collect and use information.
                </p>
              </div>
            </div>
          </div>
          <!-- Panel 5 -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href="#collapse5" data-toggle="collapse" data-parent="#accordion">Policy Updates</a></h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse">
              <div class="panel-body">
                <p>
                  ManpowerGroup may change, supplement or amend this Notice as it relates to your future use of the Web Site from time to time, for any reason, by posting a revised Notice date on the Web Site. This Notice was last updated on 02/21/2006.
                  <br>
                  If you would like more information about ManpowerGroup's privacy practices, please contact the branch manager of your local ManpowerGroup office or contact us by emailing us at data.privacy@na.Manpower.com or by writing to us at:
                </p>
              </div>
            </div>
          </div>
        </div><!-- /.panel-group -->

        <p class="text-center">
          <strong>
            ManpowerGroup<br>
            Attn.: Data Privacy Project Manager<br>
            100 Manpower Place<br>
            Milwaukee, Wisconsin 53212<br>
          </strong>
        </p>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
