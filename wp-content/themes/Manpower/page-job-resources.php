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
      <div id="content" role="main" class="job-resources-content">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<!-- Hiring Statistics -->
<div class="container-fluid job-statistics">
  <div class="row">
    <h4>Employers are looking at you from all angles.</h4>
    <div class="col-sm-12 col-md-4 stats-1">
      <p class="percentage">48%</p>
      <p class="description">of employers will Google your name</p>
    </div>
    <div class="col-sm-12 col-md-4 stats-2">
      <p class="percentage">44%</p>
      <p class="description">of employers will check your Facebook</p>
    </div>
    <div class="col-sm-12 col-md-4 stats-3">
      <p class="percentage">27%</p>
      <p class="description">of employers will check your Twitter</p>
    </div>
  </div>
</div>

<!-- Job Tips -->
<div class="container job-tips">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">
      <div class="job-tips-tabs">
        <h4>Tips for Job Seekers</h4>
        
        <div class="tabs-wrap">
          <!-- Tabs for Job Tips -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab">Practice</a></li>
            <li><a href="#two" data-toggle="tab">Prepare</a></li>
            <li><a href="#three" data-toggle="tab">Get Ready</a></li>
            <li><a href="#four" data-toggle="tab">Stay Calm</a></li>
            <li><a href="#five" data-toggle="tab">Show What You Know</a></li>
          </ul>
          
          
          <div class="tab-content">
            <div class="tab-pane active" id="one">
              <p>Practice answering interview questions and practice your responses to the typical job interview questions and answers most employers ask. Think of actual examples you can use to describe your skills. Providing evidence of your successes is a great way to promote yourself as a candidate.</p>
            </div>
            <div class="tab-pane" id="two">
              <p>Prepare a response so you are ready for the question "What do you know about our company. Know the interviewer's name and use it during the job interview. If you're not sure of the name, call and ask prior to the interview. Try to relate what you know about the company when answering questions.</p>
            </div>
            <div class="tab-pane" id="three">
              <p>Make sure you go into a job interview having showered and wearing clean clothes. If you like wearing cologne or perfume, don't wear any on the day of the interview. What's subtle smelling to you may be overwhelming to your interviewer. <br><br>
              Bring a copy of your resume.  <br><br>
              Take a pen and paper for note taking.  <br><br>
              Turn off your cell phone or leave it in the car.  <br><br>
              Be on time for the interview. On time means five to ten minutes early. If need be, take some time to drive to the office ahead of time so you know exactly where you are going and how long it will take to get there.  Go to the interview alone.</p>
            </div>
            <div class="tab-pane" id="four">
              <p>During the job interview try to relax and stay as calm possible. Take a moment to regroup. Maintain eye contact with the interviewer. Listen to the entire question before you answer and pay attention - you will be embarrassed if you forget the question! <br><br>
              Have good eye contact. Staring at the floor, ceiling, or wall when speaking or listening makes you appear disinterested. </p>
            </div>
            <div class="tab-pane" id="five">
              <p>
                Try to relate what you know about the company when answering questions. When discussing your work history and skills match them to what the company is looking for.
                <br><br>
                <strong>Don't make jokes.</strong> Too many people think they are funny when in reality they're not. A job interview isn't the place to test your material. Be friendly and outgoing, save the jokes.
                <br><br>
                <strong>Don't badmouth a boss.</strong> Bad mouthing a previous boss in a job interview is a huge negative. They may have been the worst boss in the world but expressing that in a job interview is a huge mistake.
                <br><br>
                <strong>Don't babble.</strong> When answering a question, answer the question. Don't start out answering a question and then veer off to talk about something else. Make sure your answer directly reflects the question being asked.
                <br><br>
                Don't play with your face/hair. Interviews can be a nervous experience but rubbing your chin, twirling your hair, or anything else along those lines makes you look like you're lying or lacking confidence, both not good.
                <br><br>
                <strong>Follow Up.</strong> Follow up by thanking them for the opportunity to interview for the job.
              </p>
            </div>
          </div>
        </div>
        

        <h6 class="text-center">More tips and advice to help you get the job!</h6>

        <!-- Accordion for Job Tips -->
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <!-- Tip #1 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  #1 - Do your homework.
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <ul>
                      <li>Company research</li>
                      <li>Interviewer research
                        <ul class="second">
                          <li>Uncover work history, past jobs, interests, groups, etc.</li>
                          <li>Use Google to search</li>
                          <li>Use LinkedIn</li>
                        </ul>
                      </li>
                      <li>Prepare your interview kit
                        <ul class="second">
                          <li>Extra resumes</li>
                          <li>Pen &amp; paper</li>
                          <li>Work samples</li>
                          <li>List of questions</li>
                          <li>Reference list</li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.col-sm-6 -->

                  <div class="col-xs-12 col-sm-6">
                    <ul>
                      <li>Company Research Questions
                        <ul class="second">
                          <li>What does the company do?</li>
                          <li>How successful is the company? Sales? Earnings? Growth?</li>
                          <li>What is the size of the company? How many employees?</li>
                          <li>What are the company objectives and goals?</li>
                          <li>How long has the company been in business?</li>
                          <li>Who are the main competitors?</li>
                          <li>Who are the key executives? What are they known for?</li>
                          <li>Is the company publicly or privately owned?</li>
                          <li>What is the general reputation of the company?</li>
                          <li>What are the company’s major achievements?</li>
                          <li>What are the latest news stories? Press releases?</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.panel -->
          <!-- Tip #2 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  #2 - Dress wisely.
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">

                <div class="row">
                  <div class="col-xs-12">
                    <ul>
                      <li>Dress up</li>
                      <li>Wear business attire</li>
                      <li>Wear clean, proper fitting clothes</li>
                      <li>Style hair neatly</li>
                      <li>Clean and polish shoes</li>
                      <li>Limit jewelry</li>
                      <li>Limit perfume/cologne</li>
                    </ul>
                  </div><!-- /.col-xs-12 -->
                </div>
              </div>
            </div>
          </div>
          <!-- Tip #3 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  #3 - Make a good first impression.
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12 col-sm-6">
                     <ul>
                       <li>Look good</li>
                       <li>Have a good opening line/greeting</li>
                       <li>Give a strong handshake</li>
                       <li>Smile</li>
                       <li>Make sure your phone doesn't make any noise</li>
                       <li>Look people in the eyes</li>
                       <li>Be positive</li>
                       <li>Keep nerves in check</li>
                     </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6">
                    <ul>
                      <li>Overcoming Nervousness
                        <ul class="second">
                          <li>Focus on being confident</li>
                          <li>Take deep breaths</li>
                          <li>Smile</li>
                          <li>Think of your accomplishments</li>
                          <li>Build rapport quickly, shake hands, make eye contact and confidently introduce yourself</li>
                          <li>Find common ground</li>
                          <li>Remember, you are interviewing them too!</li>
                       </ul>
                      </li>
                    </ul>
                   </div>
                 </div>
              </div>
            </div>
          </div>
          <!-- Tip #4 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  #4 - Know the questions.
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12 col-sm-6">
                     <ul>
                       <li>Tradtional</li>
                       <li>Behavioral</li>
                       <li>Case - solve a case/brain teaser</li>
                       <li>Weird
                         <ul class="second">
                           <li>How lucky are you and why?</li>
                           <li>Do you believe in Bigfoot?</li>
                           <li>If you were a box of cereal, what would you be and why?</li>
                           <li>Why is a tennis ball fuzzy?</li>
                           <li>How many snow shovels were sold in the US last year?</li>
                         </ul>
                       </li>
                       <li>Legal/Illegal</li>
                     </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6">
                    <ul>
                      <li>Answering Interview Questions
                        <ul class="second">
                          <li>Be honest</li>
                          <li>Pause for a second before answering</li>
                          <li>Avoid ums</li>
                          <li>Make answers relevant</li>
                          <li>Don't be negative</li>
                          <li>Give details</li>
                          <li>No yes/no answers</li>
                          <li>Talk up transferable skills</li>
                        </ul>
                      </li>
                    </ul>

                   </div>
                </div>

                <!-- Top Interview Questions -->
                <div class="row">
                  <h4 class="top-questions-title">Top Interview Questions:</h4>
                  <div class="col-xs-12">
                    <ul class="top-questions">
                      <li>Tell me about yourself.<br>
                        <strong>
                          Focus on why you are qualified – strongest skills, experience, knowledge, relevant accomplishments.
                        </strong>
                      </li>
                      <li>Why do you want to work here? <br>
                        <strong>
                          Demonstrate your research, talk about the company, how do you picture fitting in.
                        </strong>
                      </li>
                      <li>What is your greatest weakness? <br>
                        <strong>
                          Use a strength as weakness OR focus on match OR talk about what you like to do least.
                        </strong>
                      </li>
                      <li>Why should we hire you? <br>
                        <strong>
                          Give a good pitch, how you can address their challenges, match requirements 1 to 1 – plus bonuses.
                        </strong>
                      </li>
                      <li>Where do you want to be in 5 years? <br>
                        <strong>
                          Share what you plan to have learned, how you’ve helped the company, career aspirations.
                        </strong>
                      </li>
                      <li>Why have you been out of work so long? <br>
                        <strong>
                          Be honest, address gaps, explain your situation, share what you’ve been doing to keep current and develop your skills.
                        </strong>
                      </li>
                      <li>Why are you looking for a new job? <br>
                        <strong>
                          Stay positive, need new challenges, focus on personal andprofessional growth.
                        </strong>
                      </li>
                      <li>What are your salary requirements? <br>
                        <strong>
                          Offer a range, discuss and/or later as more is learned.
                        </strong>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Tip #5 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  #5 - Answer with examples.
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12 col-sm-6">
                     <ul>
                       <li>Tell me about a time when you had to...
                        <ul class="second">
                          <li>Solve a difficult problem</li>
                          <li>Show your leadership skills</li>
                          <li>Come up with a new solution</li>
                          <li>Persuade other to take action</li>
                          <li>Deal with difficult co-workers</li>
                        </ul>
                       </li>
                       <li>Behavioral interview questions are very popular</li>
                       <li>Proof points needed</li>
                       <li>Prepare examples in advance</li>
                       <li>Know how to tell the story</li>
                     </ul>
                   </div>
                   <div class="col-xs-12 col-sm-6">
                   <ul>
                      <li>CAR Story Format
                        <ul class="second">
                          <li>Answers behavioral questions - "Tell me about a time you..."</li>
                          <li>Break down into a 5-6 sentence story</li>
                          <li>Challenge/Problem: what was the situation and problem, what neede to be done</li>
                          <li>Action: steps/skills/tactics used</li>
                          <li>Results: explain how your actions impacted end product, what were the results</li>
                        </ul>
                      </li>
                   </ul>

                   </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Tip #6 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  #6 - Sell yourself.
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                     <ul>
                       <li>You are a brand</li>
                       <li>Position yourself as the solution</li>
                       <li>Be enthusiastic</li>
                       <li>Don't oversell</li>
                       <li>Don't be a know-it-all</li>
                       <li>Share what has made you what you are today</li>
                       <li>What do you want to be known for</li>
                     </ul>
                   </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Tip #7 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeven">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  #7 - Be a professional.
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                     <ul>
                       <li>Watch your body language</li>
                       <li>Take the high road</li>
                       <li>Exude confidence but don't brag</li>
                       <li>Don't speak poorly of past employers</li>
                       <li>Keep it positive</li>
                       <li>Act like you belong there</li>
                       <li>Ask smart questions</li>
                       <li>Interview them</li>
                     </ul>
                   </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Tip #8 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEight">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  #8 - Ask questions.
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                     <ul>
                       <li>Is this a new position? If so, why was it created?</li>
                       <li>What are the top 3 priorities for this role?</li>
                       <li>What are the major challenges for this position?</li>
                       <li>Who does this person interact with?</li>
                       <li>What is the company culture like?</li>
                       <li>Why did you decide to work here?</li>
                       <li>What do you like best about working here?</li>
                       <li>What are the next steps? When do you plan to make a decision?</li>
                     </ul>
                   </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Tip #9 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNine">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  #9 - Don't forget to follow up.
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                     <ul>
                       <li>Make it timely</li>
                       <li>Make it unique, not a form letter thank you</li>
                       <li>Say thank you</li>
                       <li>Say what you forgot</li>
                       <li>Add depth to what was discussed</li>
                       <li>Share an idea that resulted from your discussion</li>
                       <li>Remind the employer that you are a great match/Reinforce why you are the best candidate for the job</li>
                       <li>Give them the top 3 takeaways/reasons</li>
                       <li>Keep it short</li>
                     </ul>
                   </div>
                </div>

              </div>
            </div>
          </div>
          <!-- Tip #10 -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTen">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseNine">
                  #10 - Practice.
                </a>
              </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
              <div class="panel-body">
                <div class="row">
                   <div class="col-xs-12">
                     <ul>
                       <li>Hold mock interviews with friends and family</li>
                       <li>In front of the mirror</li>
                       <li>In the car</li>
                       <li>On video</li>
                       <li>Write down responses</li>
                       <li>Rehearse your opening until it's routine</li>
                       <li>Get comfortable with your answers</li>
                     </ul>
                   </div>
                </div>

              </div>
            </div>
          </div>

        </div><!-- /.panel-group -->
      </div><!-- /.job-tips-tabs -->
    </div><!-- /.narrow -->
  </div><!-- /.row -->
</div><!-- /.job-tips -->

<!-- Interivew Do's and Dont's -->
<div class="container-fluid dos-donts">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1 narrow">
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <h4>Interview <span class="dos">Dos</span></h4>
          <ul>
            <li>Thoroughly research the company</li>
            <li>Answer questions with results and data</li>
            <li>Be on time</li>
            <li>Turn off your phone</li>
            <li>Dress appropriately</li>
            <li>Be confident, truthful, sincere and professional</li>
            <li>Maintain eye contact and smile frequently</li>
            <li>Ask questions, including what the next steps are</li>
            <li>Follow up within 24 hours</li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
          <h4>Interview <span class="donts">Don'ts</span></h4>
          <ul>
            <li>Dress unprofessionally</li>
            <li>Fidget</li>
            <li>Chew gum</li>
            <li>Contradict yourself</li>
            <li>Speak negatively of past employers</li>
            <li>Answer your cell phone</li>
            <li>Get too casual</li>
            <li>Assume you got the job</li>
            <li>Talk salary, until you get the offer</li>
          </ul>
        </div>
      </div><!-- /.row -->
    </div><!-- /.narrow -->
  </div><!-- /.row -->
</div><!-- /.dos-donts -->
<?php get_template_part('includes/footer'); ?>
