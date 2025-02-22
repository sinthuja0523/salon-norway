
    <!-- Appointment Form -->
    <div class="ctm_appoint_container container-fluid" id="book_appointment">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary p-5">
                            <p class="d-inline-block bg-dark text-primary py-1 px-4">Book an appointment</p>
                            {{-- <h3 class="text-uppercase mb-4">Enter your details</h3> --}}
                            <form>
                                <hr>
                                <h5 class="text-uppercase mb-4">Service Selection</h5>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select name="branch" class="form-control bg-transparent ctm_branch"
                                                id="branch">
                                                <option value="">Branch1</option>
                                                <option value="">Branch1</option>
                                                <option value="">Branch1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <select name="branch" class="form-control bg-transparent ctm_branch"
                                                id="branch">
                                                <option value="">Service1</option>
                                                <option value="">Service1</option>
                                                <option value="">Service1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control bg-transparent" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Date</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="time" class="form-control bg-transparent" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Date</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 class="text-uppercase mb-4">Personal Details</h5>
                                    <hr>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-transparent" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your mobile number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-transparent" id="email"
                                                placeholder="Your Email">
                                            <label for="email">Your address</label>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div> --}}
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <img class="ctm_appoint_image" src="{{ asset('assets/img/open.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
