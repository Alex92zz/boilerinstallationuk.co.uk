        <!-- faq-area -->
        <section class="faq-area pt-90 mb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title-two mb-40 tg-heading-subheading animation-style2">
                                <span class="sub-title">
                                    {{ $post->category }} FAQs
                                </span>
                                <h2 class="title tg-element-title">
                                    Frequently Asked <br> Question from Our Clients
                                </h2>
                            </div>
                            <div class="accordion" id="accordionExample">


                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What services are included in your office cleaning package?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Our comprehensive office cleaning package includes a range of services
                                                such as dusting, vacuuming, mopping, sanitizing surfaces, emptying
                                                trash, cleaning restrooms, and more. We customize our cleaning checklist
                                                to meet your specific needs and ensure a clean, hygienic, and welcoming
                                                workspace.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How often should I schedule professional office cleaning?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                The frequency of office cleaning depends on factors like the size of
                                                your office, the number of employees, and your industry. For most
                                                businesses, we recommend a regular cleaning schedule of either daily,
                                                weekly, or bi-weekly visits. We can assess your needs and recommend a
                                                suitable cleaning frequency for your office.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Are your office cleaners trained and insured?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, all our office cleaners are highly trained, experienced
                                                professionals who are fully insured. Our team undergoes thorough
                                                training to ensure they are equipped with the skills and knowledge to
                                                provide top-notch cleaning services. Your office's safety and security
                                                are our top priorities.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Can you provide office cleaning services during weekends or after business
                                            hours?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Yes, we offer flexible scheduling to accommodate your preferences. We
                                                understand the importance of minimizing disruptions to your business
                                                operations. Our office cleaning services are available during weekends,
                                                evenings, or any time that is convenient for you.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            How can I request a quote for office cleaning services?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Requesting a quote is easy. You can contact us through our website or
                                                give us a call. We will discuss your office's cleaning needs, schedule a
                                                site visit if necessary, and provide you with a detailed and competitive
                                                quote tailored to your requirements.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="introduction-bottom" style="margin-top: 50px;">
                            <a href="{{ url('/contact') }}" class="btn">Get a Quote!</a>
                            <span class="call-now"><i class="fas fa-phone-alt"></i><a href="tel:03334040973">0333 4040
                                    973</a></span>
                        </div>


                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="faq-img">
                            <img loading="lazy" src="{{ asset('assets/img/home-page/window-cleaning-high-level.jpg') }}"
                                data-aos="fade-left" alt="window cleaning high level">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq-area-end -->
