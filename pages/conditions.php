<?php
/**
 * Template Name: conditions_we_treat
 * Description: A clean About/Practice page template with hero, content, contact sidebar and optional map.
 *
 * Place this file in your theme and assign the "About Practice" template to the page in WP admin.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<section id="Condition_page">
    <div class="myContiner">
        <div>
            <div>
                <?php
                    get_template_part(
                        'template-parts/treatheading',
                        null,
                        [
                            'treat_heading'    => 'Treatments We Treat',
                            'treat_subHeading' => 'At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first. ',
                        ]
                    );
            ?>
            </div>
            <!-- =====condition we treat===== -->
            <div>
                <div class="treatmentGalary">
                    <div class="treatmentGlaryWrapper">
                        <!-- ---Car Accident-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Car-Accident-Head-Injury-1.jpg"
                                    alt="back_pain.png" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Treatment for car accident injuries begins with immediate medical evaluation (ER/doctor visit) for diagnosis. Depending on the injury type (e.g., fractures, whiplash, soft tissue damage), treatment involves pain management, immobilization (casts/braces), and often surgery. The recovery phase requires extensive physical therapy and rehabilitation to regain function.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Car Accident</span>
                            </div>
                        </div>
                        <!-- --Worker compensation -- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WorkersCompensationWork related accident.jpg"
                                    alt="neck_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Workers' Compensation is no-fault insurance paid by employers that provides medical expenses and partial lost wages to employees injured or made ill due to their job. In exchange for these guaranteed benefits, the employee forfeits their right to sue the employer for negligence.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Workers Compensation ( Work related accident)</span>
                            </div>
                        </div>
                        <!-- --Carpal Tunnel Syndrome--  -->
                        <div class="glaryItem">
                            <div class="glaryCard">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Carpal-Tunnel-Wrist-Pain.jpg"
                                    alt="headaches_migraines" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Carpal Tunnel Syndrome (CTS) is a common condition caused by pressure on the median nerve as it passes through a narrow passageway in the wrist. This compression results in characteristic symptoms like numbness, tingling, and pain in the thumb and first few fingers, often worsening at night. Treatment ranges from wrist splinting and injections to surgery in severe cases.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Carpal Tunnel Syndrome</span>
                            </div>
                        </div>
                        <!-- --Cervical/ Thoracic/Lumbar Epidural Steroid injection--  -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Labor-Epidural.webp"
                                    alt="headaches_migraines" class="glaryImage">
                                <div class="glaryContent">
                                    <p>An Epidural Steroid Injection (ESI) delivers potent anti-inflammatory steroid medication directly into the epidural space around spinal nerves in the cervical (neck), thoracic (mid-back), or lumbar (low-back) regions. Its primary goal is to reduce nerve root inflammation caused by conditions like herniated discs or stenosis, providing pain relief that often radiates into the arms or legs.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Cervical/ Thoracic/Lumbar Epidural Steroid injection</span>
                            </div>
                        </div>
                        <!-- --Cervical/Thoracic/Lumbar Facet Joint Injections-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/post_surgical.jpg"
                                    alt="headaches_migraines" class="glaryImage">

                                <div class="glaryContent">
                                    <p>Post-surgical pain is either short-term pain from the incision and tissue damage,
                                        or
                                        long-term (chronic post-surgical pain) resulting from nerve damage or entrapment
                                        by
                                        scar tissue.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Cervical/Thoracic/Lumbar Facet Joint Injections</span>
                            </div>
                        </div>
                        <!-- --Cervical/Thoracic/Lumbar Medial Branch Block (MBB)-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/muscle_soft_tissue_pain.jpg"
                                    alt="muscle_soft_tissue_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Muscle and soft tissue pain (Myalgia) refers to discomfort in the muscles,
                                        ligaments,
                                        tendons, and fascia (connective tissue).

                                        Specific Soft Tissue Syndromes-
                                        Myofascial Pain Syndrome: Persistent, localized muscle pain caused by trigger
                                        points
                                        (tender knots or nodules within a tight band of muscle). Pressure on these
                                        points
                                        causes pain, sometimes radiating to other areas.
                                        Tendonitis/Bursitis: Inflammation of a tendon or bursa (fluid-filled sac near a
                                        joint), leading to acute pain, tenderness, and difficulty moving the joint.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Cervical/Thoracic/Lumbar Medial Branch Block (MBB)</span>
                            </div>
                        </div>
                        <!-- --Chronic Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cancer_pain.jpg"
                                    alt="Cancer Pain" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Cancer pain is a complex symptom that can be caused by the disease itself, by the
                                        treatment, or by other related conditions. Pain management is a crucial part of
                                        cancer care</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Chronic Pain</span>
                            </div>
                        </div>
                        <!-- --Arthritis-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Arthritis</span>
                            </div>
                        </div>
                        <!-- --Complex Regional Pain Syndrome-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Complex Regional Pain Syndrome</span>
                            </div>
                        </div>
                        <!-- --Genicular Nerve Block-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Genicular Nerve Block</span>
                            </div>
                        </div>
                        <!-- --Hip Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Hip Pain</span>
                            </div>
                        </div>
                        <!-- --Joint Injection-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Joint Injection</span>
                            </div>
                        </div>
                        <!-- --Joint Viscosupplementation-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Joint Viscosupplementation</span>
                            </div>
                        </div>
                        <!-- --Kyphoplasty-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Kyphoplasty</span>
                            </div>
                        </div>
                        <!-- --Low Back Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Low Back Pain</span>
                            </div>
                        </div>
                        <!-- --Lumbar Spinal Stenosis-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Lumbar Spinal Stenosis</span>
                            </div>
                        </div>
                        <!-- --Migraine-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Migraine</span>
                            </div>
                        </div>
                        <!-- --Neck Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Neck Pain</span>
                            </div>
                        </div>
                        <!-- --Neuropathy/ Nerve pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Neuropathy/ Nerve pain</span>
                            </div>
                        </div>
                        <!-- --Non-Surgical Orthopedic Care-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Non-Surgical Orthopedic Care</span>
                            </div>
                        </div>
                        <!-- --Pain After Back Surgery-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Pain After Back Surgery</span>
                            </div>
                        </div>
                        <!-- --Pain After Neck Surgery-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Pain After Neck Surgery</span>
                            </div>
                        </div>
                        <!-- --Peripheral Nerve Stimulation-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Peripheral Nerve Stimulation</span>
                            </div>
                        </div>
                        <!-- --Radiofrequency Ablation-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Radiofrequency Ablation</span>
                            </div>
                        </div>
                        <!-- --Endoscopic Rhizotomy-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Endoscopic Rhizotomy</span>
                            </div>
                        </div>
                        <!-- --Sacroiliac Joint Injection-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Sacroiliac Joint Injection</span>
                            </div>
                        </div>
                        <!-- --Sacroiliac Joint Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Sacroiliac Joint Pain</span>
                            </div>
                        </div>
                        <!-- --Spinal Cord Stimulator Trial/Implant-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Spinal Cord Stimulator Trial/Implant</span>
                            </div>
                        </div>
                        <!-- --Trigger Point Joint Injection-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Peripheral joint pain is a common issue causing generalized stiffness and aching
                                        in joints like the knees, shoulders, elbows, wrists, ankles, and feet, sometimes
                                        presenting as nerve issues like carpal tunnel syndrome</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Trigger Point Joint Injection</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- =====condition we treat===== -->
            <?php get_template_part('template-parts/booking_consultation', 'bookingConsultation'); ?>
        </div>
    </div>
</section>



<?php
get_footer();