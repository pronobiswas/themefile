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
                            'treat_heading'    => 'Conditions We Treat',
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
                                    <p>Treatment for car accident injuries begins with immediate medical evaluation
                                        (ER/doctor visit) for diagnosis. Depending on the injury type (e.g., fractures,
                                        whiplash, soft tissue damage), treatment involves pain management,
                                        immobilization (casts/braces), and often surgery. The recovery phase requires
                                        extensive physical therapy and rehabilitation to regain function.</p>
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
                                    <p>Workers' Compensation is no-fault insurance paid by employers that provides
                                        medical expenses and partial lost wages to employees injured or made ill due to
                                        their job. In exchange for these guaranteed benefits, the employee forfeits
                                        their right to sue the employer for negligence.</p>
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
                                    <p>Carpal Tunnel Syndrome (CTS) is a common condition caused by pressure on the
                                        median nerve as it passes through a narrow passageway in the wrist. This
                                        compression results in characteristic symptoms like numbness, tingling, and pain
                                        in the thumb and first few fingers, often worsening at night. Treatment ranges
                                        from wrist splinting and injections to surgery in severe cases.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Carpal Tunnel Syndrome</span>
                            </div>
                        </div>
                        <!-- --Cervical/ Thoracic/Lumbar Epidural Steroid injection--  -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CervicalThoracicLumbar Facet Joint Injections.jpg"
                                    alt="headaches_migraines" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A procedure that delivers anti-inflammatory medication into the space around the
                                        spinal nerves in the neck to help reduce pain, numbness, or tingling.

                                        Thoracic Epidural Steroid Injection:
                                        An injection in the middle spine area that helps relieve nerve inflammation and
                                        pain that may travel around the chest or upper back.

                                        Lumbar Epidural Steroid Injection:
                                        A targeted injection in the lower back that reduces nerve irritation and helps
                                        ease lower-back pain or leg pain (such as sciatica).</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Cervical/ Thoracic/Lumbar Epidural Steroid injection</span>
                            </div>
                        </div> -->
                        <!-- --Cervical/Thoracic/Lumbar Facet Joint Injections-- -->
                        <!-- <div class="glaryItem">
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
                        </div> -->
                        <!-- --Cervical/Thoracic/Lumbar Medial Branch Block (MBB)-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CervicalThoracicLumbarMedialBranchBlockMBB.jpg"
                                    alt="muscle_soft_tissue_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Cervical Medial Branch Block (MBB):
                                        A diagnostic procedure where an anesthetic is injected near the nerves in the
                                        neck to identify the source of pain and provide temporary relief.

                                        Thoracic Medial Branch Block (MBB):
                                        An injection into the thoracic spine to block pain signals from specific nerves,
                                        helping diagnose and treat upper back pain.

                                        Lumbar Medial Branch Block (MBB):
                                        A procedure where an anesthetic is injected near the nerves in the lower back to
                                        relieve pain and identify the source of chronic low back pain</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Cervical/Thoracic/Lumbar Medial Branch Block (MBB)</span>
                            </div>
                        </div> -->
                        <!-- --Chronic Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ChronicPain.jpg"
                                    alt="Cancer Pain" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A long-lasting pain condition that persists for months or years, often beyond the usual healing time, and can be caused by various conditions like injury, illness, or nerve damage. It can significantly impact daily life and require ongoing management.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Chronic Pain</span>
                            </div>
                        </div>
                        <!-- --Arthritis-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Arthritis.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A group of conditions that cause inflammation, pain, and stiffness in the joints. The most common types are osteoarthritis and rheumatoid arthritis, which can affect mobility and daily activities.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Arthritis</span>
                            </div>
                        </div>
                        <!-- --Complex Regional Pain Syndrome-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/crps1.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A chronic pain condition that typically affects a limb after an injury, causing intense pain, swelling, and changes in skin color and temperature. It may also involve abnormal sweating and sensitivity in the affected area.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Complex Regional Pain Syndrome</span>
                            </div>
                        </div>
                        <!-- --Genicular Nerve Block-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GenicularNerveBlock.png"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A procedure where an anesthetic is injected around the genicular nerves in the knee to reduce pain caused by conditions like osteoarthritis. It helps diagnose and treat knee pain by temporarily blocking pain signals from the joint.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Genicular Nerve Block</span>
                            </div>
                        </div> -->
                        <!-- --Hip Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hip-pain-800.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Discomfort or soreness in the hip joint, often caused by conditions like arthritis, bursitis, or injury. It can result in limited mobility and may affect daily activities such as walking or standing.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Hip Pain</span>
                            </div>
                        </div>
                        <!-- --Joint Injection-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/JointInjection.jpg"
                                    alt="JointInjection.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A medical procedure where medication, typically a steroid or anesthetic, is injected directly into a joint to reduce inflammation, pain, and swelling. It is commonly used to treat conditions like arthritis or tendonitis.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Joint Injection</span>
                            </div>
                        </div> -->
                        <!-- --Joint Viscosupplementation-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joint_pain.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A treatment where hyaluronic acid is injected into a joint to improve lubrication, reduce pain, and enhance mobility, often used for osteoarthritis, especially in the knee. It helps restore the joint’s natural fluid, easing movement.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Joint Viscosupplementation</span>
                            </div>
                        </div> -->
                        <!-- --Kyphoplasty-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kyphoplasty.jpg"
                                    alt="Kyphoplasty.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A minimally invasive procedure used to treat spinal compression fractures, often caused by osteoporosis. It involves injecting a special cement into the fractured vertebra to restore its height and reduce pain.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Kyphoplasty</span>
                            </div>
                        </div> -->
                        <!-- --Low Back Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LowBackPain.jpg"
                                    alt="LowBackPain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Pain or discomfort in the lower back, often caused by muscle strain, poor posture, herniated discs, or spinal issues. It can vary from mild to severe and may affect mobility and daily activities.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Low Back Pain</span>
                            </div>
                        </div>
                        <!-- --Lumbar Spinal Stenosis-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LumbarSpinalStenosis.jpg"
                                    alt="LumbarSpinalStenosis.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A condition where the spaces in the lower spine narrow, putting pressure on the spinal cord and nerves. This can cause symptoms like pain, numbness, or weakness in the lower back, legs, and buttocks.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Lumbar Spinal Stenosis</span>
                            </div>
                        </div>
                        <!-- --Migraine-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Migraine.jpg"
                                    alt="Migraine.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A neurological condition characterized by intense, recurring headaches often accompanied by nausea, sensitivity to light, and visual disturbances. Migraines can last for hours or even days and are triggered by various factors, including stress, certain foods, or hormonal changes.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Migraine</span>
                            </div>
                        </div>
                        <!-- --Neck Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NeckPain.jpg"
                                    alt="NeckPain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Discomfort or stiffness in the neck, often caused by muscle strain, poor posture, or injury. It can range from mild to severe and may be accompanied by headaches, numbness, or pain radiating down the arms.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Neck Pain</span>
                            </div>
                        </div>
                        <!-- --Neuropathy/ Nerve pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nerve_pain.webp"
                                    alt="nerve_pain.webp" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Pain caused by damage or dysfunction in the nerves, often resulting in sharp, burning, or tingling sensations. It can occur due to conditions like diabetes, infections, or injuries, affecting areas like the hands, feet, or other parts of the body.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Neuropathy/ Nerve pain</span>
                            </div>
                        </div>
                        <!-- --Non-Surgical Orthopedic Care-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Non-Surgical Orthopedic Care.jpg"
                                    alt="Non-Surgical Orthopedic Care.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A treatment approach for musculoskeletal conditions that focuses on pain relief, rehabilitation, and improving mobility without surgery. Methods include physical therapy, medications, injections, and lifestyle changes to manage joint, muscle, and bone issues.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Non-Surgical Orthopedic Care</span>
                            </div>
                        </div>
                        <!-- --Pain After Back Surgery-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pain After Back Surgery.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Ongoing discomfort or complications following spinal surgery, which may result from factors like nerve irritation, muscle strain, or surgical site inflammation. It can vary in intensity and may require additional treatment or rehabilitation to manage.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Pain After Back Surgery</span>
                            </div>
                        </div>
                        <!-- --Pain After Neck Surgery-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pain After Neck Surgery.jpg"
                                    alt="Pain After Neck Surgery.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Discomfort or pain following neck surgery, often due to muscle soreness, nerve irritation, or surgical site healing. It can range from mild to severe and may require medication, physical therapy, or further treatments for relief.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Pain After Neck Surgery</span>
                            </div>
                        </div>
                        <!-- --Peripheral Nerve Stimulation-- -->
                        <!-- <div class="glaryItem">s
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/peripheral-nerve-stimulation.webp"
                                    alt="peripheral-nerve-stimulation.webp" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A minimally invasive procedure that delivers electrical impulses to specific nerves to reduce chronic pain. It is used for conditions like neuropathy or joint pain, helping to block pain signals and improve quality of life.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Peripheral Nerve Stimulation</span>
                            </div>
                        </div> -->
                        <!-- --Radiofrequency Ablation-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/RadiofrequencyAblation.jpg"
                                    alt="RadiofrequencyAblation.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A minimally invasive procedure that uses heat generated by radio waves to target and destroy nerve tissue causing pain. It is commonly used to treat chronic pain conditions, such as arthritis or back pain, by interrupting pain signals.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Radiofrequency Ablation</span>
                            </div>
                        </div> -->
                        <!-- --Endoscopic Rhizotomy-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/EndoscopicRhizotomy.webp"
                                    alt="EndoscopicRhizotomy.webp" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A minimally invasive procedure that targets and destroys nerve roots responsible for chronic pain, often in the neck or lower back. It is performed using an endoscope, which allows for precise treatment with minimal tissue disruption and faster recovery.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Endoscopic Rhizotomy</span>
                            </div>
                        </div> -->
                        <!-- --Sacroiliac Joint Injection-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SacroiliacJointInjection.jpg"
                                    alt="SacroiliacJointInjection.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A procedure where medication, usually a steroid and anesthetic, is injected into the sacroiliac joint to reduce inflammation and relieve lower back or buttock pain. It helps diagnose and treat pain originating from the joint.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Sacroiliac Joint Injection</span>
                            </div>
                        </div> -->
                        <!-- --Varicose Veins-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VaricoseVeins.jpg"
                                    alt="Varicose Veins" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Varicose veins are swollen, twisted veins that often appear on the legs due to weakened valve function. They can cause pain, discomfort, and swelling, and are sometimes treated for cosmetic or medical reasons.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Varicose Veins</span>
                            </div>
                        </div>
                        <!-- --Sacroiliac Joint Pain-- -->
                        <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SacroiliacJointPain.jpg"
                                    alt="SacroiliacJointPain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>Pain in the lower back or buttocks caused by inflammation or dysfunction in the sacroiliac joint, which connects the spine to the pelvis. It can be triggered by injury, arthritis, or pregnancy-related changes, often resulting in sharp or aching pain.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Sacroiliac Joint Pain</span>
                            </div>
                        </div>
                        <!-- --Trigger Point Joint Injection-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Trigger Point Joint Injection.jpg"
                                    alt="joint_pain.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A procedure where medication, usually a local anesthetic or steroid, is injected into specific muscle "trigger points" to relieve localized pain and muscle tension. It helps treat conditions like fibromyalgia or myofascial pain syndrome.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Trigger Point Joint Injection</span>
                            </div>
                        </div> -->
                        <!-- --Spinal Cord Stimulator Trial/Implant-- -->
                        <!-- <div class="glaryItem">
                            <div class="glaryCard">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/SpinalCordStimulatorTrialImplant.jpg"
                                    alt="SpinalCordStimulatorTrialImplant.jpg" class="glaryImage">
                                <div class="glaryContent">
                                    <p>A procedure that involves placing a device near the spinal cord to deliver electrical impulses, which block pain signals from reaching the brain. The trial phase tests its effectiveness before permanent implantation for chronic pain management.</p>
                                </div>
                            </div>
                            <div class="cardTag">
                                <span>Spinal Cord Stimulator Trial/Implant</span>
                            </div>
                        </div> -->
                        

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