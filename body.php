<div class="container-fluid m-0">
    <div class="position-relative text-center students">
        <h4>Congratulations to our Matric 2021 class</h4>
        
        
    <?php 
    $sql = "SELECT * FROM testimonial";
    $res = $conn->query($sql);
    if($res->num_rows>0){
    $count = 0;
    
    while($row = $res->fetch_assoc()){
      $count++;
      echo "
      <div class='complemments animate__animated animate__fadeInRight ml-auto mr-auto mt-0 position-relative'>
    
    <div class='container p-0 border border-dark rounded mt-0' style='border-style:dotted;'>
    <div class='top container-fluid text-center text-white border '>".$row["school"]."</div>
    <div class='row p-0 container-fluid '>
      <div class='col-4'><a href='img/".$row["username"].".png' height='100%' width='100%'><img src='img/".$row["username"].".png' height='100%' width='100%' alt='#' ></a> </div>
      <div class='col-8 container-fluid text-center student_message  p-0 ml-0 mr-0 mt-0 mb-3 small position-relative float-left'>".$row["message1"]."</div>
      <div class='position-absolute bottom-0 right-0 small m-0 p-0 font-weight-bold'>From: ".$row["name1"]." ".$row["surname"]."</div>
    </div>
    
    
    </div>
    <div class='count'><span id='current_count'>$count</span> /<span id='total_count'>10</span></div>
    
    </div>
      ";
    }
    }
    ?>
           
     <div class="left-change hover" onclick="left(1)"> <i class="fas fa-angle-left fa-2x"></i> </div>
     <div class="right-change hover" onclick="right(1)"> <i class="fas fa-angle-right fa-2x"></i> </div>
    
     
        </div>
</div>



<div class="container-fluid mission">
    <div class="row ">
        <div class="col-sm-4 text-center pt-4 animate__animated animate__fadeInUp check3">
           
            <span class="container text-center text-warning">
                <i class="fas fa-book-open fa-2x"></i>
                <div class="container rounded border mission_card position-relative top-0 ">
                    <img src="img/WhatsApp Image 2022-01-15 at 12.36.17.jpeg" class="position-absolute mission_img" alt="logo image"/>
                   <div class="container-fluid mission_text" style="opacity: 1;">
                    <h3>Our Mission</h3>
                    <p> To render high standard education that will ensure prosperity for our 
                        students </p>
                        <p > To provide professional and conducive learning environment to students at different level of learning </p>
                   </div>
                  
                </div>
            </span>
        </div>
        
        <div class="col-sm-4 text-center pt-4 position-relative animate__animated animate__fadeInUp check3" style="animation-delay: 0.5s;">
            <span class="container text-center text-warning">
                <i class="fas fa-book-open fa-2x"></i>
                <div class="container rounded border mission_card position-relative top-0 ">
                    <img src="img/WhatsApp Image 2022-01-15 at 12.36.18 (1).jpeg" class="position-absolute mission_img" alt="logo image"/>
                   <div class="container-fluid mission_text" style="opacity: 1;">
                    <h3>Our Vision</h3>
                   
                    <p>To build highly competitive private Academy that will become the number one choice
                        for both parents and students in whole of South Africa</p>
                        <p> Our vision reflects our values: integrity, service, excelence and team work</p>
                   </div>
                  
                </div>
                
            </span>
        </div>
        <div class="col-sm-4 text-center pt-4 position-relative animate__animated animate__fadeInUp check3" style="animation-delay: 1s;">
            <span class="container text-center text-warning">
                <i class="fas fa-globe fa-2x"></i>

                <div class="container rounded border mission_card position-relative top-0 ">
                    <img src="img/WhatsApp Image 2022-01-15 at 12.36.18.jpeg" class="position-absolute mission_img" alt="logo image"/>
                   <div class="container-fluid mission_text" style="opacity: 1;">
                    <h3>Why choose us?</h3>
                    <p >We offer both online and face-to-face support for students </p>
                    <p >We have skilled tutors to help students understand better </p>
                   </div>
                  
                </div>
            </span>
        </div>
    </div>
    
</div>

<hr >
<div class="container-fluid mb-4 ml-0 mr-0 p-0">
    <div class="row position-relative p-3" >
        <div class="col-sm-6 p-2 text-center" >
            <h4 clss="text-decoration-underline" ><i class="fas fa-bookmark m-3"></i>SUBJECTS OFFERED</h4>
        <hr class="m-auto p-0 w-50">
        </div>
       
        <div class="col-sm-6 fs-4">We aim to provide relevant quality-driven  education of south Africa's standard </div>
        
    </div>
    <div class="row p-4">
    <div class="col-sm-3 border border-secondary m-2 p-0 position-relative top-0 animate__animated  check4" id="subjects">
        <img src="img/chemistry.jpg" class="position-absolute mission_img" alt="logo image"/>
        <p > <i class="fas fa-graduation-cap fa-2x text-warning"></i></p>
        <div class="container-fluid text-center h4">Physical Sciences</div>
        <div class=" container-fluid m-0 p-1 text-center bg-light position-sticky bottom-0">
           <div class="p-2 button-theme rounded w-auto">
            <b><a href="#" class="text-white">Get tutor for this</a></b> <i class="fas fa-arrow-right m-1"></i>
           </div> </div>
          
    </div> 

    <div class="col-sm-3 border border-secondary m-2 p-0 position-relative top-0 animate__animated  check4" style="animation-delay: 0.5s;" >
        <img src="img/mathematics.jpg" class="position-absolute mission_img" alt="logo image"/>
        <p > <i class="fas fa-graduation-cap fa-2x text-warning"></i></p>
        <div class="container-fluid text-center h4">Mathematics</div>
        <div class=" container-fluid m-0 p-1 text-center bg-light position-sticky bottom-0">
           <div class="p-2 button-theme rounded w-auto">
            <b><a href="#" class="text-white">Get tutor for this</a></b> <i class="fas fa-arrow-right m-1"></i>
           </div> </div>
          
    </div> 
    <div class="col-sm-3 border border-secondary m-2 p-0 position-relative top-0 animate__animated  check4" style="animation-delay: 1s;">
        <img src="img/Literacy.jpg" class="position-absolute mission_img" alt="logo image"/>
        <p > <i class="fas fa-graduation-cap fa-2x text-warning"></i></p>
        <div class="container-fluid text-center h4">Mathematical Literacy</div>
        <div class=" container-fluid m-0 p-1 text-center bg-light position-sticky bottom-0">
           <div class="p-2 button-theme rounded w-auto">
            <b><a href="#" class="text-white">Get tutor for this</a></b> <i class="fas fa-arrow-right m-1"></i>
           </div> </div>
          
    </div> 

    <div class="col-sm-3 border border-secondary m-2 p-0 position-relative animate__animated check4" style="animation-delay: 1.5s;">
        <img src="img/accounting.jpg" class="position-absolute mission_img" alt="logo image"/>
        <p > <i class="fas fa-graduation-cap fa-2x text-warning"></i></p>
        <div class="container-fluid text-center h4">Accounting</div>
        <div class=" container-fluid m-0 p-1 text-center bg-light position-sticky bottom-0">
           <div class="p-2 button-theme rounded w-auto">
            <b><a href="#" class="text-white">Get tutor for this</a></b> <i class="fas fa-arrow-right m-1"></i>
           </div> </div>
          
    </div> 
    
    
    </div> 
    <div class="row  m-2 p-0 text-center">
        
          
    </div>
    
    <div class="container-fluid row fees m-0 text-white" id="fees">
        <div class="col-sm-6 float-left animate__animated check5"> <h3 clss="text-decoration-underline"><i class="fas fa-money-check-alt m-3"></i>Fees</h3> 
        <small class="small text-danger font-weight-bold">NB:If you're registered for face to face classes automatically you qualify
            for online classes </small>
        </div>
     
        <div class="col-sm-6 animate__animated check5 float-left" style="animation-delay: 0.5s;">
            <ul>
                <li> <b>Registration fee</b></li>
                <ol>
                    <li>Registration fee for online classes R50</li>
                    <li>Registration fee for face-to-face classes R150</li>
                </ol>
                <li> <b>School's fee</b></li>
                <ol>
                    <li>Online Classes R150/pm </li>
                    <li>Face to face R450/pm</li>
                </ol>
            </ul>

        </div>
        </div>
        <div class="container-fluid row border bg-light ml-0 mr-0 mt-3 ">
           <div class="text-center container-fluid "><h3><i class="fas fa-book ml-3 "></i> Lessons procedure</h3></div>
            <div class="col-sm-5 text-center procedure text-warning rounded p-0 border border-dark mt-3 ml-4 mr-4 animate__animated  check6">
                <div class="container-fluid text-dark m-0 bg-light text-center"> <h4>Online Classes</h4></div>
                <div class="small">
                        <p >Our Online classes run on Telegram, Microsoft Meetings, google meet and WhatsApp, we chose these platforms for these reasons:
                           <ul> <li>They are easy to use, less destruction for students, no ads, no statuses and unnecessary videos, lower 
                                data rates, ability to use robots hence we developed robots to help with learning for students
                                and Tutors</li>
                                <div class="w-100 m-0 p-1 text-center"> <a href="subscribe.php" class=" rounded shadow border text-white p-1">Apply online now</a></div>
                            </ul>
                            </p>
                        <p>Once you are done with registration you will be added to one of platforms for learning</p>
                        <p><b>We track students' attendance</b> in the platform then send daily and weekly reports to 
                            parents and students. All groups are managed by <b>Robots</b> hence if student fails to comply, he/she 
                            will be removed from the group immediately</p>
                </div>

            </div>
           


            <div class="col-sm-5 text-center procedure text-warning rounded p-0 border border-dark mt-3 ml-4 mr-4 animate__animated check6" style="animation-delay: 0.5s;">
                <div class="container-fluid text-dark m-0 bg-light text-center"> <h4>Face to face Classes</h4></div>
                <div>
                           <ul class="small">
                                <li>Our face-to-face classes run on Sunday only, this is because matric students attend from Monday to 
                                    Saturday (07:00h to 16:00h). This can change for grade 10 and 11
                                </li>
                                
                                <li>Our Sunday session run from 10:00h to 17:00h (grade 10-12)
                                </li>
                                <li>We will assist with university applications and bursary application
                                </li>
                                <li>Study materials will be provided on Sundays, which are study guides and past papers for free</li>
                            </ul>
                            <b>For more information regarding this, contact us:</b>
                            <div class="w-100 m-0 p-1 text-center"> <a href="subscribe.php" class=" rounded shadow border text-white p-1">Ask question</a></div>
                      
                </div>

            </div>
 <hr class="border w-100">
            <br>
                   <div class="text-center w-100 mt-2"><h2> Meet us on Campus or Online</h2></div> 
            <div class="mt-2 bg-light border ml-0 mr-0 w-100 row mb-1 p-1 ">

                <div class="col-sm-6 d-vr">
                    <div class="row w-100 m-0 p-0 ">
                        <div class="venue col-sm-6 p-0 m-0 "><img class="venue-img" src="img/IMG-20210804-WA0009.jpg"> </div>
                        <div class="col-sm-6 p-2 "> <p >We give you opportunity to collaborate with other students and University graduate Tutors
                            during our face to face classes</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row w-100 m-0 p-0">
                        <div class="venue col-sm-6 p-0 m-0"><img src="img/IMG-20210804-WA0010.jpg"></div>
                        <div class="col-sm-6 p-2 "><p>We send you video sessions and notes during our online classes</p> </div>
                    </div>
                </div>
            </div>
        </div>
       
