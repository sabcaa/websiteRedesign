
<?php
/**
 * Template Name: Exams
 */

get_header(); ?>

<?php get_template_part( 'template-parts/page-hero', null, array(
    'title'    => 'Exams',
    'subtitle' => 'Information about entry-to-practice exams in Alberta.',
    'breadcrumbs' => array(
        'Home'       => '/',
        'Applicants' => '/applicants/',
    )
)); ?>

<div class="page-layout">

 <main class="main-content">
     <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-stamp"></i></span>
            Approved registration exams
        </h2>

        <p>The Council approves registration exams that may be used as an entry-to-practice exam in Alberta. The following exams are approved:</p>
            <ul>
                <li>Pan-Canadian Acupuncturists Examination administered by CARB-TCMPA</li>
                <li>Acupuncture Certification of the National Certification Board for Acupuncture and Herbal Medicine exam</li>
                <li>California Acupuncture Licensing Examination </li>
            </ul>

        <div class="callout-warning">
                <strong>Important:</strong> An Alberta-based applicant who writes the Acupuncture Certification of the National Certification Board for Acupuncture and Herbal Medicine exam through the College <strong>does not</strong> gain the ability to be licensed or work in the United States. 
            </div>

     </section>

     
     <section class="content-section">
        <h2>
            <span class="section-icon"><i class="fa-solid fa-check"></i></span>
            Eligibility for exams
        </h2>

        <p>Applicants educated in Alberta can apply for examinations if:</p>
        <ul>
            <li>The applicant has obtained a diploma from a program in acupuncture; OR</li>
            <li>At the time of application, the applicant is enrolled in and actively completing the final year of their acupuncture education.</li>
        </ul>
        <p><strong>A</strong><strong>pplicants educated in a Canadian jurisdiction outside of Alberta</strong>&nbsp;must upload a copy of their diploma and transcripts to their online application form. Additional documentation, such as a program syllabus, may be requested.</p>
        
        <p><strong>International applicants</strong>&nbsp;must upload an education credential assessment from a&nbsp;<a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/immigrate-canada/express-entry/documents/education-assessed/how.html" target="_blank" rel="noopener">designated organization</a>&nbsp;and copy of their diploma to their online application form. The education credential assessment must indicate a minimum 3 years of training in Acupuncture, Traditional Chinese Medicine or Medicine with a focus in Chinese Medicine. Additional documentation may be requested.</p>
       
        <p>More information on eligible credential assessments can be found in the International Graduates section on our&nbsp;<a href="https://www.acupuncturealberta.ca/applicants/applications/">Applications page</a>.</p>
     </section>

     <section class="content-section">
         <h2>
            <span class="section-icon"><i class="fa-solid fa-circle-info"></i></span>
            Pan-Canadian exam information
        </h2>
        <p>For the most current and accurate information regarding the Pan-Canadian Examinations, refer directly to the&nbsp;<a href="https://carb-tcmpa.org/">CARB-TCMPA website</a>&nbsp;and communicate with CARB-TCMPA for any inquiries.</p>
        <h3>Important dates</h3>
        <table>
            <tbody>
            <tr>
            <td>&nbsp;</td>
            <td><strong>FALL EXAMINATION</strong></td>
            <td><strong>SPRING EXAMINATION</strong></td>
            </tr>
            <tr>
            <td>Application Opens</td>
            <td>June 1st</td>
            <td>December 1st</td>
            </tr>
            <tr>
            <td>Application Closes</td>
            <td>July 15th</td>
            <td>January 15th</td>
            </tr>
            <tr>
            <td>Examination Fees Due</td>
            <td>August 15th</td>
            <td>February 15th</td>
            </tr>
            </tbody>
        </table>
        <h3>Exam withdrawal</h3>
        <p>Applicants who withdraw after the examination fees due date may not receive a full refund. Applicants must contact CARB-TCMPA if their withdrawal is within four weeks of the exam administration date.</p>

         </section>

   </main>
</div>

<?php get_footer(); ?>
