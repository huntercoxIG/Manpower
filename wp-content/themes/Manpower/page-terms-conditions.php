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
      <div id="content" role="main" class="terms-content">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->


<!-- Summary of Terms -->
<div class="container-fluid summary">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">
      <div class="row">
        <div class="col-xs-12">
          <h4>This Agreement contains the following provisions:</h4>
          
          <ul>
            <li><strong>1. Your Acceptance of this Agreement</li>
            <li><strong>2. Scope of this Agreement</li>
            <li><strong>3. Changes to this Agreement</li>
            <li><strong>4. Permission to Use the Web Site</li>
            <li><strong>5. Web Site Communications and Orders</li>
            <li><strong>6. Errors</li>
            <li><strong>7. No Advice</li>
            <li><strong>8. Assessment and Screen Services</li>
            <li><strong>9. Disclaimer, Liability Exclusion, Liability Limitation, Release and Indemnity</li>
            <li><strong>10. Ownership and Permitted Uses of the Web Site</li>
            <li><strong>11. Trademark Information</li>
            <li><strong>12. Personal Information Privacy</li>
            <li><strong>13. Other Sites</li>
            <li><strong>14. Linking, Framing, Mirroring, Scraping and Data-Mining the Web Site</li>
            <li><strong>15. Termination of this Agreement and the Web Site</li>
            <li><strong>16. Governing Law and Dispute Resolution</li>
            <li><strong>17. Other Matters</li>
          </ul>
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.narrow -->
  </div><!-- /.row -->  
</div><!-- /.summary -->   



<!-- Terms & Conditions -->
<div class="container terms-tabs">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <!--  #1 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  #1 - YOUR ACCEPTANCE OF THIS AGREEMENT
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <p>This is an Agreement between you and all persons you represent (and for purposes of this Agreement, “person” includes natural persons and any type of incorporated or unincorporated entity) and ManpowerGroup (“ManpowerGroup“), and governs your use of the Manpower.com web site and the content, information and services provided through the Manpower.com web site (collectively the “Web Site“). This Agreement also provides benefits to ManpowerGroup’s affiliates, service providers, suppliers and sub-contractors, including various ManpowerGroup businesses around the world (collectively “Affiliates and Providers“).

                    <br><br>

                    Each time you use the Web Site you signify your acceptance and agreement, and the acceptance and agreement of all persons you represent, without limitation or qualification, to be bound by this Agreement, and you represent and warrant that you have the legal authority to agree to and accept this Agreement on behalf of yourself and all persons you represent. If you do not agree with each provision of this Agreement, or you are not authorized to agree to and accept this Agreement, you may not use this Web Site.</p>
                  </div><!-- /.col-xs-12 -->
                </div>
              </div>
            </div>
          </div><!-- /.panel -->
          <!-- #2 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  #2 - SCOPE OF THIS AGREEMENT
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <p>This Agreement is in addition to and supplements any written agreements that you or any persons you represent have with ManpowerGroup or Affiliates and Providers (now or in the future) concerning your dealings with ManpowerGroup or Affiliates and Providers generally.
                    
                    <br><br>

                    This Agreement and all other agreements that you or any persons you represent have with ManpowerGroup or Affiliates and Providers (now or in the future) together constitute the entire agreement regarding your access to and use of the Web Site, and supersede all previous agreements (written, oral or otherwise) regarding your access to and use of the Web Site. In the event of any inconsistency or conflict between the provisions of this Agreement and the provisions of any other agreement that you or any persons you represent have with Manpower or Affiliates and Providers (now or in the future), the provisions of this Agreement shall govern regarding your access to and use of the Web Site.</p>
                  </div><!-- /.col-xs-12 -->
                </div>
              </div>
            </div>
          </div>
          <!-- #3 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  #3 - CHANGES TO THIS AGREEMENT
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12 col-sm-6">
                    <p>ManpowerGroup may, in its discretion, change, supplement or amend this Agreement as it relates to your future use of the Web Site from time to time, for any reason, and without any prior notice or liability to you or any other person. You may not change, supplement, or amend this Agreement in any manner.</p>
                   </div>
                 </div> 
              </div>
            </div>
          </div>
          <!-- #4 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  #4 - PERMISSION TO USE THE WEB SITE
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <p>The Web Site may be accessed and used only by individuals who have: (a) reached the age of majority in their jurisdiction of residence and can form legally binding contracts under applicable law; and (b) accepted this Agreement. Persons using the Web Site must comply with all applicable laws. Manpower may in its discretion refuse permission to access and use the Web Site.</p>     
                  </div>
                </div> 

                <!-- Top Interview Questions -->
                <div class="row">
                  <h4 class="top-questions-title">Top Interview Questions:</h4>
                  <div class="col-xs-12">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--  #5 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  #5 - WEB SITE COMMUNICATIONS AND ORDERS
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12 col-sm-6">
                      <p>
                        The Web Site is a portal and information conduit to other web sites and businesses operated by Affiliates and Providers. Affiliates and Providers may be independent from ManpowerGroup, their web sites may have different or inconsistent terms of use or privacy notices, and their services may be provided under different terms and conditions. Your dealings with Affiliates and Providers and use of their web sites are at your own risk, and you shall not make any claim against ManpowerGroupGroup arising out of those matters. As between you and ManpowerGroupGroup, the provisions of this Agreement under the section headed Disclaimer, Liability Exclusion, Liability Limitation, Release and Indemnity apply, with all necessary modifications, to your dealings with any Affiliates and Providers and use of their web sites.
                        
                        <br><br>

                        By activating certain links, including order-related links, you may be automatically connected with web sites operated by Affiliates and Providers. If you use the Web Site to initiate communication regarding your staffing needs, the information you submit may be disclosed to, and processed and responded by, Affiliates and Providers.

                        <br><br>

                        All communications you submit through the Web Site or e-mail must be true, accurate and complete. ManpowerGroup and Affiliates and Providers will rely upon the truth, accuracy and completeness of the communications you submit through the Web Site. If you submit any incorrect or incomplete communications, or if any communications are damaged or distorted during transmission to ManpowerGroup, you and all persons you represent will be liable for any loss, damage or additional costs that you, ManpowerGroup, Affiliates and Providers, or other persons may incur as a result.

                        <br><br>

                        You authorize ManpowerGroup and Affiliates and Providers to: (a) accept communications that they receive from you by means of the Web Site or e-mail as if those communications had been given directly by you in writing and signed by you; (b) disclose your communications to any Affiliates and Providers, and ManpowerGroup workers by means of the Web Site, e-mail or other communications; and (c) respond to your communications by means of Internet communications, e-mail or other communications. Communications you send to ManpowerGroup by means of the Web Site or e-mail are not effective unless and until they are processed by the responsible ManpowerGroup representative.

                        <br><br>

                        ManpowerGroup may refuse to process any communications sent to ManpowerGroup by means of the Web Site or e-mail, or may reverse the processing of any communications sent to ManpowerGroup by means of the Web Site or e-mail, at any time in ManpowerGroup’s discretion, and without any notice or liability to you or any other person, including, without limitation, if: (a) ManpowerGroup cannot process the communications; (b) the communications violate any provision in this Agreement or any other agreement that you or any other person may have with ManpowerGroup; (c) ManpowerGroup considers that the communications conflict with any other instructions or agreements with you or any person you represent; or (d) there is an operational failure or malfunction in connection with the transmission of the communications.

                        <br><br>

                        Communications that are submitted to Mr. Jeffrey A. Joerres or other named ManpowerGroup personnel through the Web site may be answered by other staff, rather than by Mr. Joerres or the named individuals, personally.
                      </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #6 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  #6 - ERRORS
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>ManpowerGroup endeavors to provide accurate information through the Web Site. Nevertheless, errors may occur. Accordingly, ManpowerGroup reserves the right to change other information available through the Web Site at any time and from time to time without any notice or liability to you or any other person.</p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #7 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeven">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  #7 - NO ADVICE
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <p>The Web Site is not intended to be a comprehensive or detailed statement concerning the matters addressed; investment, tax, banking, accounting, legal, or other professional or expert advice or recommendations; or an offer or recommendation to sell or buy any stock, bond or other financial instrument or any product or service. You should seek appropriate, qualified professional advice and recommendations before acting or omitting to act based upon any information provided on or though the Web Site.</p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #8 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEight">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  #8 - ASSESSMENT AND SCREENING SERVICES
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <p>The following terms set forth in this Section 8 applies to assessment and screening services offered on the Web Site and the assessment and screening system provided on the Web Site (hereinafter: “the Assessment and Screening Services”, “the Terms” and “the System”). Any and all rights not expressly granted in these Terms are reserved by ManpowerGroup. ManpowerGroup reserves the right to change these Terms, at its sole discretion, any time or from time to time. IF YOU DO NOT AGREE TO, OR ARE NOT COMFORTABLE WITH THESE TERMS OR ANY PART THEREOF, PLEASE DO NOT USE THE ASSESSMENT AND SCREENING SERVICES. USING THESE ASSESSMENT AND SCREENING SERVICES OR ANY PART THEREOF IN ANY WAY, SIGNIFIES YOUR CONSENT TO BE BOUND BY THESE TERMS AND ANY PART THEREOF.
                      
                    <strong>8.1 Your License to Use the ManpowerGroup System</strong>
                    <br><br>
                    We hereby grant you a non-exclusive, non-transferable, world-wide, personal license under the ManpowerGroup intellectual property rights, to use the System subject to the Terms. By this license you are granted a limited right to use the System as stated, but you are not and will not become the owner of the System or any part thereof. Only you may use the System, and you may not rent, lease, lend, sub-license or transfer the System or any part thereof nor any of your rights under the Terms to anyone else. You may not develop or derive for commercial use any data in machine-readable or other form that incorporates or uses any part of the System.
                    <br><br>
                    <strong>8.2 Your Use of the System</strong>
                    <br><br>
                    You are allowed to use the System only for personal and noncommercial use. Except as otherwise provided herein, you may not alter, modify, copy, distribute, transmit, display, perform, reproduce, publish, license, create derivative works from, publicly display, transfer, sell or use in any other way, the System, any information or content contained in the System or any part thereof without the prior express written permission of ManpowerGroup.
                    <br><br>
                    <strong>8.2.1 Your User Responsibilities</strong>
                    <br><br>
                    You may only use the System and any part thereof for lawful purposes. As one of the conditions of your use, you warrant and represent that you are a genuine and bona fide job applicant and that you are not using the System for any other purpose. It is YOUR RESPONSIBILITY to ensure that your use of the System complies with these Terms. You may not use the System or any part thereof to: (i) perform any activity which is or may be, directly or indirectly unlawful, harmful, threatening, abusive, harassing, tortuous, defamatory, libelous, vulgar, obscene, invasive of others’ privacy, hateful, or racially, sexually, ethnically or otherwise objectionable; (ii) perform any activity which will or may breach a third party right including by submitting content that you do not have rights in; and (iii) advertising, offering, soliciting, licensing or granting public access to any content offered on the System. In addition, in order to allow us to maintain reliable and effective System, you specifically agree to refrain from intentionally providing any irrelevant, misleading or wrongful information and answers to questions or queries found on the System. You warrant and affirm that you will NOT:
                    <br><br>
                    <ul>
                      <li>Impersonate any person or entity, or otherwise misrepresent your affiliation with a person or entity;</li>

                      <li>Allow someone to help or assist you in completing any component of the System;</li>

                      <li>Help or assist anyone else in competing any component of the system;</li>

                      <li>Provide any incomplete, false or inaccurate information on any application submitted for a job through the System;</li>

                      <li>Post or transmit any content or information that contains a virus, worms, Trojan horses, or corrupted data;</li>

                      <li>Eavesdrop, commit electronic trespassing, fraud or forgery, sniff, spam, nuke, hack, spoof, break passwords, contaminate the System, cause unauthorized, damaging and/or harmful access and/or retrieval of information and data;</li>

                      <li>Create deep linking from any other page to any part of the System;</li>

                      <li>Delete any author contributions, legal notices or proprietary designations or labels that you upload to any communication feature;</li>

                      <li>Upload or transmit any content or information that infringes any patent, trademark, trade secret, copyright or other proprietary right of any party; and not.</li>

                      <li>Delete or revise any material posted by another person or entity.</li>
                    </ul>

                    <br><br>
                    <strong>8.2.2 Changes to the Service</strong>
                    <br><br>
                    We reserve the right, at any time and for whatever reason, to limit, deny, create different priorities to different users, modify, or cancel some or all of the functionality of the System or any part thereof, without prior notice. We may, at any time, suspend or cancel the System or any part thereof for any reason without prior notice. This version of the System is provided to you free of charge. Nevertheless, we expressly reserve the rights to charge you for the use of the System or certain parts thereof and change these Terms to reflect such changes. However, we will not charge you for using the System or certain portions of the System, before receiving your consent, though we reserve the right to terminate your membership with us and cancel your registration for the System, in whole or in part, should you refuse to provide such consent and payment if and when so required.
                    <br><br>
                    <strong>8.2.3 Waiver of Right to see Tests and Results</strong>
                    <br><br>
                    The information and other content you provide to us will be processed and assessed in the System for use by the recruiters who post jobs on the System. The tests you will be undergoing and the results thereof will not be available to you and you hereby waive any rights to see such tests and/or results or any part thereof.
                    <br><br>
                    <strong>8.2.4 Waiver of Right for Revenues</strong>
                    <br><br>
                    YOU HEREBY WAIVE ANY RIGHTS OR CLAIMS AS TO ANY REVENUES OR BENEFITS WE DERIVE FROM YOUR USE OR DISTRIBUTION OF ANY CONTENT YOU TRANSMIT OR OTHERWISE DELIVER TO US.
                    <br><br>
                    <strong>8.3 Privacy Policy</strong>
                    <br><br>
                    By using the System, you may post information and/or otherwise make available to ManpowerGroup certain information about yourself, including without limitation, curriculum vitae, statistical data, test answers, etc., which is transmittable to the ManpowerGroup servers. Such information is made available by you and used by ManpowerGroup under these Terms and subject to the Privacy Policy, the terms and conditions thereof are incorporated herein by this reference. For further information regarding the Privacy Policy please refer to our Web Site.
                    <br><br>
                    <strong>8.4 System Security</strong>
                    <br><br>
                    We operate secure data networks protected by industry standard security protection systems. Our security and privacy policies are periodically reviewed and enhanced, as we believe is necessary from time to time. However, the System service and our servers, as most Internet applications, are vulnerable to various security issues and hence should be considered unsecured. Data and information sent using the System may be subject to privacy and security invading activities including, but not limited to, eavesdropping, electronic trespassing, sniffing, spamming, nuking, hacking, spoofing, imposture, breaking passwords, harassment, fraud, forgery and system contamination, use of viruses, worms and Trojan horses, causing unauthorized, damaging harmful access and/or retrieval of information and data on your computer and other forms and activities that may even be considered unlawful. We are doing our best to prevent such invasions from happening but we will not be responsible for any damage or harm caused as a result of such actions.
                    <br><br>
                    YOU ARE ESPECIALLY ADVISED AGAINST USING THE SYSTEM OR ANY PART THEREOF, WITH “CONTENT SENSITIVE” OR “MISSION CRITICAL” APPLICATIONS AND INFORMATION. “CONTENT SENSITIVE” SHALL MEAN ANY INFORMATION OR DATA YOU DO NOT WISH TO BE FREELY ACCESSIBLE AND GENERALLY AVAILABLE TO INTERNET USERS. “MISSION CRITICAL” APPLICATIONS AND USE SHALL MEAN APPLICATIONS AND USE THAT MAY RESULT IN DAMAGE.
                    <br><br>
                    <strong>8.4.1 </strong>The following covenants are binding for all the System users, and the failure to comply with any of these safeguards will constitute grounds for ManpowerGroup to terminate any data transfer arrangement between ManpowerGroup and the person(s) or entity(ies) concerned.
                    <br><br>
                    You are prohibited from violating or attempting to violate the security of the System, including without limitation, (i) accessing data not intended for such a user or logging into a server or account for which such a user is not authorized access, (ii) attempting to probe, scan or test the vulnerability of the System or our network or to breach security or authentication measures without proper authorization, (iii) attempting to interfere with services to any user, host or network, including, without limitation, via means of overloading, “flooding”, “mail-bombing” or “crashing”, or (iv) forging any TCP/IP packet header or any part of the header information in any posting. You agree that you will not use any device, software or routine to interfere or attempt to interfere with the proper working of the System or any part thereof. You agree that you will not take any action that imposes an unreasonable or disproportionately large load on our infrastructure.
                    <br><br>
                    <strong>8.4.2</strong> Violations of System or network security may result in civil and/or criminal liability. ManpowerGroup will investigate occurrences that may involve such violations and may involve, and cooperate with law enforcement authorities in prosecuting users who are involved in such violations. In addition, and without prejudice to any other remedy to which ManpowerGroup may be entitled under these Terms and/or any applicable law, ManpowerGroup may immediately terminate, without notice, your use of and access to the System and any part thereof, and in the event that you have paid any amount for the right to use the System, then without derogating from any other right for indemnification and/or compensation it may have, ManpowerGroup may set-off any such funds and you hereby forfeit any right you may have to receive any such funds from ManpowerGroup.
                    <br><br>
                    <strong>8.5 Proprietary Rights</strong>
                    <br><br>
                    ManpowerGroup, Inc. is the owner of all intellectual property rights (including the copyrights) in the ManpowerGroup System and any part thereof. Material published by ManpowerGroup on this System may contain other proprietary notices or describe products, services, processes or technologies owned by ManpowerGroup or third parties. Nothing in these Terms or in the System shall be construed as granting to you a license under any copyright, trademark, patent or other intellectual property right of ManpowerGroup or any third party, except as expressly set forth herein.

                    </p>
                  </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #9 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNine">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  #9 - DISCLAIMER, LIABILITY EXCLUSION, LIABILITY LIMITATION, RELEASE AND INDEMNITY
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <p>
                    ManpowerGroup and Affiliates and Providers do not accept any liability for your use of the Web Site. For that reason, the following provisions apply to your use of the Web Site.
                    <br><br>
                   <strong>DISCLAIMER</strong>
                    <br><br>
                    YOUR USE OF THE WEB SITE IS AT YOUR OWN RISK. THE WEB SITE IS PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS, AND WITHOUT ANY REPRESENTATIONS, WARRANTIES OR CONDITIONS OF ANY KIND, WHETHER EXPRESS OR IMPLIED, AND INCLUDING WITHOUT LIMITATION REPRESENTATIONS, WARRANTIES OR CONDITIONS OF TITLE, NON-INFRINGEMENT, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, PERFORMANCE, DURABILITY, AVAILABILITY, TIMELINESS, ACCURACY OR COMPLETENESS, ALL OF WHICH ARE HEREBY DISCLAIMED BY ManpowerGroup AND THE AFFILIATES AND PROVIDERS TO THE FULLEST EXTENT PERMITTED BY LAW. THERE WILL NOT BE ANY REPRESENTATIONS, WARRANTIES OR CONDITIONS CREATED BY A COURSE OF DEALING, COURSE OF PERFORMANCE OR TRADE USAGE. YOU ARE SOLELY RESPONSIBLE FOR OBTAINING, CONFIGURING AND MAINTAINING ALL COMPUTER HARDWARE, SOFTWARE, TELEPHONE SERVICES, AND OTHER EQUIPMENT AND SERVICES NECESSARY FOR YOU TO USE THE WEB SITE.
                    <br><br>
                    THE INTERNET IS NOT A SECURE MEDIUM, MAY BE SUBJECT TO INTERRUPTION AND DISRUPTION, AND INADVERTENT OR DELIBERATE BREACHES OF SECURITY AND PRIVACY. THE OPERATION OF THE WEB SITE MAY BE AFFECTED BY NUMEROUS FACTORS BEYOND ManpowerGroup’S CONTROL. THE OPERATION OF THE WEB SITE MAY NOT BE CONTINUOUS OR UNINTERRUPTED, SECURE OR PRIVATE.
                        <br><br>
                    ManpowerGroup AND THE AFFILIATES AND PROVIDERS WILL NOT BE LIABLE TO YOU OR ANY OTHER PERSON FOR ANY LOSS OR DAMAGES SUFFERED BY YOU OR ANY OTHER PERSON AS A RESULT OF ANY FAILURE OR REFUSAL BY ManpowerGroup TO GIVE EFFECT TO, OR FOR ANY FAILURE OR DELAY BY ManpowerGroup IN RECEIVING, ACCESSING, PROCESSING OR ACCEPTING, ANY COMMUNICATION SENT TO ManpowerGroup BY MEANS OF THE WEB SITE OR E-MAIL, OR FOR ANY LOSS OR DAMAGES SUFFERED AS A RESULT OF THE OPERATIONAL FAILURE, MALFUNCTION, INTERRUPTION, CHANGE, AMENDMENT OR WITHDRAWAL OF THE WEB SITE OR E-MAIL SERVICES.
                                <br><br>
                    WITHOUT LIMITING THE GENERALITY OF THE FOREGOING, ManpowerGroup AND THE AFFILIATES AND PROVIDERS MAKE NO REPRESENTATION, WARRANTY OR CONDITION THAT: (A) THE WEB SITE WILL BE COMPATIBLE WITH YOUR COMPUTER AND RELATED EQUIPMENT AND SOFTWARE; (B) THE WEB SITE WILL BE AVAILABLE OR WILL FUNCTION WITHOUT INTERRUPTION OR WILL BE FREE OF ERRORS OR THAT ANY ERRORS WILL BE CORRECTED; (C) THE WEB SITE WILL MEET YOUR REQUIREMENTS; (D) THE INFORMATION CONTAINED IN THE WEB SITE OR DERIVED FROM THE WEB SITE WILL BE ACCURATE, COMPLETE, SEQUENTIAL, OR TIMELY; (E) CERTAIN OR ANY RESULTS MAY BE OBTAINED THROUGH THE USE OF THE WEB SITE; (F) THE USE OF THE WEB SITE, INCLUDING THE BROWSING AND DOWNLOADING OF ANY INFORMATION, WILL BE FREE OF VIRUSES, TROJAN HORSES, WORMS OR OTHER DESTRUCTIVE OR DISRUPTIVE COMPONENTS; OR (G) THE USE OF THE WEB SITE WILL NOT INFRINGE THE RIGHTS (INCLUDING INTELLECTUAL PROPERTY RIGHTS) OF ANY PERSON; AND ManpowerGroup AND THE AFFILIATES AND PROVIDERS DISCLAIM ANY AND ALL LIABILITY REGARDING SUCH MATTERS TO THE FULLEST EXTENT PERMITTED BY LAW.
                                <br><br>
                    <strong>LIABILITY EXCLUSION</strong>
                                <br><br>
                    ManpowerGroup AND THE AFFILIATES AND PROVIDERS WILL NOT UNDER ANY CIRCUMSTANCES BE LIABLE TO YOU OR ANY OTHER PERSON FOR ANY LOSS OF USE, LOSS OF PRODUCTION, LOSS OF INCOME OR PROFITS (ANTICIPATED OR OTHERWISE), LOSS OF MARKETS, ECONOMIC LOSS, SPECIAL, INCIDENTAL, INDIRECT OR CONSEQUENTIAL LOSS OR DAMAGE OR EXEMPLARY OR PUNITIVE DAMAGES, WHETHER IN CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR UNDER ANY OTHER THEORY OF LAW OR EQUITY, ARISING FROM, CONNECTED WITH, OR RELATING TO THE USE OF THE WEB SITE BY YOU OR ANY OTHER PERSON, AND REGARDLESS OF ANY NEGLIGENCE OR OTHER FAULT OR WRONGDOING BY ManpowerGroup OR ANY AFFILIATE OR PROVIDER OR ANY PERSON FOR WHOM ManpowerGroup OR AN AFFILIATE OR PROVIDER MAY BE RESPONSIBLE, AND NOTWITHSTANDING THAT ManpowerGroup OR ANY AFFILIATE OR PROVIDER MAY HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH LOSS OR DAMAGES BEING INCURRED BY YOU OR ANY OTHER PERSON.
                                <br><br>
                    The exclusion of certain warranties and the exclusion of certain liabilities are prohibited by legislation in some jurisdictions. Such legislative limitations may apply to you.
                                <br><br>
                    <strong>LIABILITY LIMITATION</strong>
                                <br><br>
                    WITHOUT LIMITING THE FOREGOING, IN NO EVENT WILL ManpowerGroup OR ANY OF THE AFFILIATES AND PROVIDERS’ TOTAL LIABILITY TO YOU OR ANY OTHER PERSON FOR ANY CLAIMS, PROCEEDINGS, LIABILITIES, OBLIGATIONS, DAMAGES, LOSSES, AND COSTS, WHETHER IN CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY, OR UNDER ANY OTHER THEORY OF LAW OR EQUITY, AND REGARDLESS OF ANY NEGLIGENCE OR OTHER FAULT OR WRONGDOING BY ManpowerGroup OR ANY AFFILIATE OR PROVIDER OR ANY PERSON FOR WHOM ManpowerGroup OR ANY AFFILIATE OR PROVIDER IS RESPONSIBLE, EXCEED $100 (US) OR THE AMOUNT YOU PAID TO ManpowerGroup FOR THE USE OF THE WEB SITE, WHICHEVER IS LESS.
                                <br><br>
                    The limitation of certain liabilities is prohibited by legislation in some jurisdictions. Such legislative limitations may apply to you.
                                <br><br>
                    <strong>RELEASE</strong>
                                <br><br>
                    YOU HEREBY RELEASE, REMISE AND FOREVER DISCHARGE AS PERMITTED BY LAW EACH OF ManpowerGroup AND THE AFFILIATES AND PROVIDERS AND ALL OF THEIR RESPECTIVE FRANCHISEES, PARTNERS, AGENTS, DIRECTORS, OFFICERS, EMPLOYEES, INFORMATION PROVIDERS, SERVICE PROVIDERS, SUPPLIERS, SUBCONTRACTORS, LICENSORS AND LICENSEES, AND ALL OTHER RELATED, ASSOCIATED, OR CONNECTED PERSONS FROM ANY AND ALL MANNER OF RIGHTS, CLAIMS, COMPLAINTS, DEMANDS, CAUSES OF ACTION, PROCEEDINGS, LIABILITIES, OBLIGATIONS, LEGAL FEES, COSTS, AND DISBURSEMENTS OF ANY NATURE AND KIND WHATSOEVER AND HOWSOEVER ARISING, WHETHER KNOWN OR UNKNOWN, WHICH NOW OR HEREAFTER EXIST, WHICH ARISE FROM, RELATE TO, OR ARE CONNECTED WITH YOUR USE OF THE WEB SITE.
                                <br><br>
                    <strong>INDEMNITY</strong>
                                <br><br>
                    YOU AGREE TO INDEMNIFY, DEFEND AND HOLD HARMLESS EACH OF ManpowerGroup AND THE AFFILIATES AND PROVIDERS AND ALL OF THEIR RESPECTIVE FRANCHISEES, PARTNERS, AGENTS, DIRECTORS, OFFICERS, EMPLOYEES, INFORMATION PROVIDERS, SERVICE PROVIDERS, SUPPLIERS, SUBCONTRACTORS, LICENSORS AND LICENSEES, AND ALL OTHER RELATED, ASSOCIATED, OR CONNECTED PERSONS (COLLECTIVELY, THE “INDEMNIFIED PARTIES”) HARMLESS FROM AND AGAINST ANY AND ALL LIABILITIES, EXPENSES AND COSTS, INCLUDING WITHOUT LIMITATION REASONABLE LEGAL FEES AND EXPENSES, INCURRED BY THE INDEMNIFIED PARTIES IN CONNECTION WITH ANY CLAIM OR DEMAND ARISING OUT OF, RELATED TO, OR CONNECTED WITH YOUR USE OF THE WEB SITE OR YOUR BREACH OF THIS AGREEMENT. YOU WILL ASSIST AND COOPERATE AS FULLY AS REASONABLY REQUIRED BY THE INDEMNIFIED PARTIES IN THE DEFENSE OF ANY CLAIM OR DEMAND. ADVICE AND INFORMATION PROVIDED BY ManpowerGroup OR THE AFFILIATES AND PROVIDERS OR THEIR RESPECTIVE REPRESENTATIVES, WHETHER ORAL OR WRITTEN, WILL NOT CREATE ANY REPRESENTATION, WARRANTY OR CONDITION OR VARY OR AMEND THIS AGREEMENT, INCLUDING THE ABOVE DISCLAIMER, LIABILITY EXCLUSION, LIABILITY LIMITATION, RELEASE AND INDEMNITY PROVISIONS, AND YOU MAY NOT RELY UPON ANY SUCH ADVICE OR INFORMATION.
                                <br><br>
                    FAIR ALLOCATION OF RISK AND LIABILITY.
                                <br><br>
                    YOUR ACKNOWLEDGE AND AGREE THIS AGREEMENT REPRESENTS A FAIR ALLOCATION OF RISK AND LIABILITY.
                  </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #10 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNine">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  #10 - OWNERSHIP AND PERMITTED USES OF THE WEB SITE
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      Copyright ManpowerGroup Inc. 2007. All Rights Reserved. The Web Site and all information (in text, graphical, video and audio forms), images, icons, software, designs, applications, calculators, models, data, and other elements available on or through the Web Site are the property of ManpowerGroup, Affiliates and Providers and others, and are protected by United States and international copyright, trademark, and other laws. Your use of the Web Site does not transfer to you any ownership or other rights in the Web Site or its content.
                      <br>
                      The Web Site may only be used in the manner described expressly in this Agreement. In particular, except as expressly stated otherwise in this Agreement, the Web Site may not be copied, imitated, reproduced, republished, uploaded, posted, transmitted, modified, indexed, catalogued, mirrored or distributed in any way, in whole or in part, without the express prior written consent of ManpowerGroup.
                      <br>
                      The Web Site may be used only for lawful purposes. The Web Site may be accessed and used only using commercially available, SSL-capable Web browser software.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #11 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEleven">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseNine">
                  #11 - TRADEMARK INFORMATION
                </a>
              </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      ManpowerGroup, ManpowerGroup.COM?, the ManpowerGroup Logo, and other marks and logos appearing on the Web Site are registered and unregistered trademarks, trade names and service marks owned or licensed by ManpowerGroup.Other product and company names and logos appearing on the Web Site may be registered or unregistered trade names, trademarks and service marks of their respective owners.
                      <br>Any use of the trade names, trademarks, service marks and logos (collectively “Marks”) displayed on the Web Site is strictly prohibited. Nothing appearing on the Web Site or elsewhere shall be construed as granting, by implication, estoppel, or otherwise, any license or right to use any Marks displayed on the Web Site.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #12 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwelve">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                  #12 - PERSONAL INFORMATION PRIVACY
                </a>
              </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      ManpowerGroup collects, uses and discloses information regarding your use of the Web Site and your personal information in accordance with the Privacy Notice, found on this Web Site under the “Privacy” link. ManpowerGroup may change the Privacy Notice from time to time in its discretion without prior notice or liability to you or any other person. By accepting this Agreement, and each time you use the Web Site, you consent to ManpowerGroup’s collection, use and disclosure of your personal information in accordance with the Privacy Notice as it then reads without any further notice or any liability to you or any other person.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #13 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThirteen">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                  #13 - OTHER SITES
                </a>
              </h4>
            </div>
            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      The Web Site includes links to other web sites or resources and businesses operated by Affiliates and Providers or other persons (collectively, “Other Sites“). Other Sites are independent from ManpowerGroup, may have different or inconsistent privacy notices or terms of use, and ManpowerGroup has no responsibility or liability for or control over Other Sites, their business, goods, services, or content. Links to Other Sites are provided solely for your convenience. ManpowerGroup does not sponsor or endorse any Other Sites or their content or the goods or services available through those Other Sites. Your use of Other Sites and your dealings with the owners or operators of Other Sites is at your own risk, and you shall not make any claim against ManpowerGroup arising out of your use of any Other Sites or your dealings with the owners or operators of any Other Sites.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #14 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFourteen">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                  #14 - LINKING, FRAMING, MIRRORING, SCRAPING AND DATA-MINING THE WEB SITE
                </a>
              </h4>
            </div>
            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      Links to the Web Site without the express written permission of ManpowerGroup are strictly prohibited. The framing, mirroring, scraping or data mining of the Web Site or any of its content in any form and by any method are strictly prohibited.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #15 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFifteen">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseTwelve">
                  #15 - TERMINATION OF THIS AGREEMENT AND THE WEB SITE
                </a>
              </h4>
            </div>
            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      If you breach any provision of this Agreement, you may no longer use the Web Site.<br>
                      ManpowerGroup may, at any time and for any reason and in its discretion: (a) change, suspend or terminate, temporarily or permanently, the Web Site or any part of it; or (b) restrict, suspend or terminate (in whole or in part) your permission to access or use the Web Site; all without any notice or liability to you or any other person. If this Agreement or your permission to access or use the Web Site is terminated by you, or by a person you represent, or by ManpowerGroup, then: (a) this Agreement and all other then existing agreements between ManpowerGroup and any persons you represent will continue to apply and be binding upon you and any persons you represent, jointly and severally, regarding your prior access to and use of the Web Site, and anything connected with, relating to or arising there from; and (b) ManpowerGroup may continue to use and disclose your personal information in accordance with the Web Site Privacy Policy as amended from time to time.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #16 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwelve">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                  #16 - GOVERNING LAW AND DISPUTE RESOLUTION
                </a>
              </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      The Web Site is controlled by ManpowerGroup from Milwaukee, Wisconsin, United States of America. This Agreement, your use of the Web Site, and all related matters are governed solely by the laws of the state of Wisconsin, United States of America and applicable federal laws of the United States of America, excluding any rules of private international law or the conflict of laws that would lead to the application of any other laws.
                      <br>

                      Any controversy or claim arising out of or relating to this Agreement, or the breach thereof, shall be settled by arbitration administered by the American Arbitration Association under its Commercial Arbitration Rules, and judgment on the award rendered by the arbitrator may be entered in any court having jurisdiction thereof. The arbitration will be before a single arbitrator. The place of arbitration will be Milwaukee, Wisconsin, United States of America. Notwithstanding the foregoing, you or ManpowerGroup may seek injunctive relief from an appropriate court located in Milwaukee, Wisconsin prior to or during the arbitration.
                      <br>
                      
                      Any claim or cause of action you may have arising from, connected with, or relating to your use of the Web Site, this Agreement, or any related matters must be commenced within six (6) months after the claim or cause of action arises, after which time the claim or cause of action is forever barred, regardless of any statute or law to the contrary.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>
          <!--  #17 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeventeen">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseFourteen">
                  #17 - OTHER MATTERS
                </a>
              </h4>
            </div>
            <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                    <p>
                      If any provision of this Agreement is found to be unlawful, void, or for any reason unenforceable, then that provision shall be deemed to be severed from the rest of this Agreement and shall not affect the validity and enforceability of any remaining provisions.
                      <br>

                      Notwithstanding anything herein to the contrary, the following provisions of this Agreement, and all other provisions necessary for their interpretation or enforcement, will survive indefinitely after the termination of this Agreement and remain in full force and effect and be binding upon the parties as applicable: 8 (Disclaimer, Liability Exclusion, Liability Limitation, Release, and Indemnity); 9 (Ownership and Permitted Uses of the Web Site); 11 (Personal Information Privacy); 12 (Other Sites); 14 (Termination); 15 (Governing Law and Dispute Resolution); and 16 (Other Matters). The provisions of this Agreement will inure to the benefit of and be binding upon each of ManpowerGroup and Affiliates and Providers and each of their respective successors and assigns and related persons, and you and your heirs, executors, administrators, successors, and personal representatives, and all persons you represent and their respective successors, assigns and related persons. You and the persons you represent may not assign this Agreement or the rights and obligations under this Agreement without the express prior written consent of ManpowerGroup, which may be withheld in ManpowerGroup’s discretion. ManpowerGroup may assign this Agreement and its rights and obligations under this Agreement without your consent or the consent of any persons you represent.
                      <br>
                      
                      No consent or waiver by any party to or of any breach or default by any other party in its performance of its obligations under this Agreement will be deemed or construed to be a consent to or waiver of a continuing breach or default or any other breach or default of those or any other obligations of that party. No consent or waiver will be effective unless in writing and signed by all parties.
                      <br>
                      
                      You and any persons you represent (on the one hand) and ManpowerGroup and Affiliates and Providers (on the other hand) are independent contractors and no agency, partnership, joint venture, employment or franchise relationship is intended or created by this Agreement or your use of the Web Site.
                      <br>
                      
                      The parties have expressly requested and required that this Agreement and all other related documents be drawn up in the English language.
                      <br>
                      
                      Any rights not expressly granted by this Agreement are reserved to ManpowerGroup.
                      This Agreement is subject to change without notice.
                    </p>
                   </div>
                </div> 

              </div>
            </div>
          </div>

        </div><!-- /.panel-group -->
      </div><!-- /.job-s-tabs -->
    </div><!-- /.narrow -->
  </div><!-- /.row -->
</div><!-- /.job-s -->
<?php get_template_part('includes/footer'); ?>
