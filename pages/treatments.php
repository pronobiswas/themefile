<?php
/**
 * Template Name: treatments
 * Description: A clean Treatments page template with hero, content, contact sidebar and optional map.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<section id="treatment_we_treat">
    <div class="myContiner">
        <div class="breadCrumb">
            home / treatment
        </div>
        <div>
            <?php
                    get_template_part(
                        'template-parts/treatHeading',
                        null,
                        [
                            'treat_heading'    => 'Treatments We Treat',
                            'treat_subHeading' => 'At our practice, we are dedicated to providing compassionate, personalized care to every patient. Our team combines advanced medical expertise with a commitment to understanding each individual’s unique needs. Whether you’re visiting for diagnosis, treatment, or ongoing care, we strive to create a comfortable environment where your health and well-being come first. ',
                        ]
                    );
            ?>
        </div>
        <!-- ====tratment card wrapper==== -->
        <div class="treatment_card_continer">
            <div class="treatment_card_wrapper">

                <!-- ---flip card-1-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Joint Vasco </h4>
                        </div>
                        <div class="flip-card-back">
                            <p>The injection of hyaluronic acid or similar substances into joints (commonly the knee) to
                                improve lubrication, reduce pain, and enhance mobility, especially in osteoarthritis.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-2-- -->

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Cervical/Thoracic/Lumbar Medial Branch Block (MBB)</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>
                                An injection procedure that targets the medial branches of the dorsal rami nerves
                                supplying the cervical/thoracic/lumbar facet joints. It helps in diagnosing and managing
                                neck/mid-back/low back pain related to facet joint arthritis.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ---flip card-3-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Cervical/ Thoracic/Lumbar Epidural Steroid injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Administration of steroids into the epidural space of the spine to reduce inflammation
                                and alleviate pain, often used for back pain and sciatica.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-4-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Cervical/Thoracic/Lumbar Facet Joint Injections</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Injection of anesthetic and steroids into the facet joints of the spine to relieve
                                localized back pain caused by arthritis or inflammation.</p>
                        </div>
                    </div>
                </div>

                <!-- ==flip card=5= -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Minimally Invasive Varicose Vein Treatment</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>
                                Varicose veins can cause discomfort, swelling, and fatigue — but today's treatments are
                                simple, safe, and highly effective. We offer minimally invasive, such as laser therapy,
                                radiofrequency ablation, and sclerotherapy to gently close unhealthy veins and restore
                                healthy circulation. Most patients walk out the same day with little to no downtime,
                                enjoying improved comfort, appearance, and confidence.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-6-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Joint Injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>
                                Injection of anesthetic and steroids into the facet joints of the spine to relieve
                                localized back pain caused by arthritis or inflammation.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-7-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Kyphoplasty</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A minimally invasive surgical procedure used to treat spinal compression fractures. It
                                involves inserting a balloon catheter into the fractured vertebra to create space, then
                                filling it with bone cement to stabilize the vertebra and relieve pain.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-8-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Genicular Nerve Block</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A minimally invasive medical procedure used to diagnose and treat chronic knee pain by
                                interrupting pain signals sent from the knee joint to the brain.</p>
                        </div>
                    </div>
                </div>

                <!-- ==flip card=9= -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Endoscopic Rhizotomy</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Use of heat generated by radio waves to destroy nerve fibers carrying pain signals,
                                providing longer-term relief for joint or facet pain.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-10-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Radiofrequency Ablation</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Use of heat generated by radio waves to destroy nerve fibers carrying pain signals,
                                providing longer-term relief for joint or facet pain.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-11-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Peripheral Nerve Stimulation</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A procedure where a small device is implanted near peripheral nerves to deliver
                                electrical impulses. This interferes with pain signals sent to the brain, helping to
                                manage chronic pain conditions</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-12-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Sacroiliac Joint Injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>An injection of anesthetic and corticosteroids into the sacroiliac joint (located where
                                the sacrum meets the ilium) to reduce inflammation, diagnose the source of lower back
                                pain, and provide pain relief.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-13-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Endoscopic discectomy</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Endoscopic discectomy is a minimally invasive procedure used to remove herniated disc
                                material pressing on nerves in the spine. It involves small incisions and uses a camera
                                for precise disc removal with minimal recovery time.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-14-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Trigger Point Joint Injection</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A procedure where medication, usually a local anesthetic or steroid, is injected into
                                specific muscle "trigger points" to relieve localized pain and muscle tension. It helps
                                treat conditions like fibromyalgia or myofascial pain syndrome.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-15-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4>Spinal Cord Stimulator Trial/Implant</h4>
                        </div>
                        <div class="flip-card-back">
                            <p>A procedure that involves placing a device near the spinal cord to deliver electrical
                                impulses, which block pain signals from reaching the brain. The trial phase tests its
                                effectiveness before permanent implantation for chronic pain management.</p>
                        </div>
                    </div>
                </div>
                <!-- ---flip card-16-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4> Platelet Rich plasma </h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Platelet-Rich Plasma (PRP) therapy is a regenerative treatment that uses a concentrated
                                sample of your own blood platelets to stimulate healing, reduce inflammation, and
                                promote tissue repair. This natural, minimally invasive procedure is commonly used for
                                joint pain, tendon injuries, and hair restoration.</p>
                        </div>
                    </div>
                </div>

                <!-- ---flip card-17-- -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <h4> Stem cell therapy </h4>
                        </div>
                        <div class="flip-card-back">
                            <p>Stem cell-based therapy uses ethically sourced, FDA-regulated regenerative biologics-such
                                as umbilical-derived tissue products-to support the body's natural healing and repair
                                processes. These minimally invasive treatments may help reduce pain, promote tissue
                                recovery, and improve function in patients who have not responded to traditional
                                therapies.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div>
            <?php get_template_part('template-parts/booking_consultation', 'bookingConsultation'); ?>
        </div>
    </div>
</section>


<?php
get_footer();