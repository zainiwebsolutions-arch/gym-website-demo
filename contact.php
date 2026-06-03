<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section style="padding-top: 25vh; text-align: center; position: relative; min-height: 60vh; display: flex; align-items: center; justify-content: center; background: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?q=80&w=2069&auto=format&fit=crop') no-repeat center center/cover;">
    <div class="slide-overlay"></div>
    <div class="container reveal" style="position: relative; z-index: 2;">
        <h1 style="font-size: clamp(3rem, 10vw, 6rem); line-height: 1.1; margin-bottom: 20px;">START YOUR <span class="text-neon">TRANSFORMATION TODAY</span></h1>
        <p style="max-width: 700px; margin: 30px auto; font-size: 1.2rem; font-weight: 300;">Speak with our fitness team and schedule your free consultation or gym tour in Hyderabad.</p>
    </div>
</section>

<!-- Contact Form & Info -->
<section style="padding: 100px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 80px;">
            <!-- Contact Info -->
            <div class="reveal-left">
                <div class="card glass" style="margin-bottom: 30px; padding: 40px;">
                    <h3 class="text-neon" style="margin-bottom: 35px; letter-spacing: 2px;">CONTACT INFORMATION</h3>
                    <div style="display: flex; gap: 20px; align-items: start; margin-bottom: 30px;">
                        <i class="fas fa-map-marker-alt text-neon" style="font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="margin-bottom: 10px; font-size: 1.2rem;">OUR LOCATION</h4>
                            <p style="font-size: 1rem; margin: 0;">123 Elite Way, Fitness District<br>Hyderabad, Telangana 500001</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 20px; align-items: start; margin-bottom: 30px;">
                        <i class="fas fa-phone-alt text-neon" style="font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="margin-bottom: 10px; font-size: 1.2rem;">CALL US</h4>
                            <p style="font-size: 1rem; margin: 0;">+91 98765 43210<br>+91 87654 32109</p>
                        </div>
                    </div>
                    <div style="display: flex; gap: 20px; align-items: start;">
                        <i class="fas fa-envelope text-neon" style="font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="margin-bottom: 10px; font-size: 1.2rem;">EMAIL US</h4>
                            <p style="font-size: 1rem; margin: 0;">info@ironedge.fit<br>support@ironedge.fit</p>
                        </div>
                    </div>
                </div>

                <div class="card glass" style="padding: 40px;">
                    <h3 class="text-neon" style="margin-bottom: 30px; letter-spacing: 2px;">FOLLOW OUR JOURNEY</h3>
                    <div class="social-links" style="display: flex; gap: 20px; font-size: 1.5rem; margin-bottom: 30px;">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <a href="https://wa.me/1234567890" class="btn btn-outline" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 15px; border-color: #25D366; color: #25D366; border-radius: 50px; padding: 15px;">
                        <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                    </a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="reveal-right">
                <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                    <div class="card glass text-center" style="padding: 60px; border-radius: 40px; border-color: var(--primary-color);">
                        <i class="fas fa-check-circle text-neon" style="font-size: 4rem; margin-bottom: 20px;"></i>
                        <h2 class="text-neon" style="margin-bottom: 20px;">REQUEST RECEIVED!</h2>
                        <p style="font-size: 1.2rem; color: white !important;">Thank you for reaching out. One of our master coaches will contact you within the next 24 hours to schedule your transformation session.</p>
                        <a href="index.php" class="btn btn-outline" style="margin-top: 30px; border-radius: 50px;">Return Home</a>
                    </div>
                <?php else: ?>
                    <form action="process-form.php" method="POST" class="card" style="padding: 60px; border-radius: 40px;">
                        <input type="hidden" name="form_type" value="trial">
                        <h3 style="margin-bottom: 40px; text-transform: uppercase; letter-spacing: 2px; font-size: 1.8rem;">BOOK YOUR <span class="text-neon">FREE TRIAL</span></h3>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;">
                            <div>
                                <label style="display: block; margin-bottom: 12px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Full Name</label>
                                <input type="text" name="name" required placeholder="John Doe" style="width: 100%; background: rgba(255,255,255,0.05); border: 1px solid var(--glass-border); padding: 15px; border-radius: 10px; color: white;">
                            </div>
                            <div>
                                <label style="display: block; margin-bottom: 12px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Email Address</label>
                                <input type="email" name="email" required placeholder="john@example.com" style="width: 100%; background: rgba(255,255,255,0.05); border: 1px solid var(--glass-border); padding: 15px; border-radius: 10px; color: white;">
                            </div>
                        </div>
                        <div style="margin-bottom: 30px;">
                            <label style="display: block; margin-bottom: 12px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Interest</label>
                            <select name="interest" style="width: 100%; background: rgba(255,255,255,0.05); border: 1px solid var(--glass-border); padding: 15px; border-radius: 10px; color: white;">
                                <option value="membership">Membership Inquiry</option>
                                <option value="personal_training">Personal Training</option>
                                <option value="free_trial">Free Trial</option>
                                <option value="partnership">Business Partnership</option>
                            </select>
                        </div>
                        <div style="margin-bottom: 40px;">
                            <label style="display: block; margin-bottom: 12px; font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px;">Your Message</label>
                            <textarea name="message" required placeholder="How can we help you?" rows="5" style="width: 100%; background: rgba(255,255,255,0.05); border: 1px solid var(--glass-border); padding: 15px; border-radius: 10px; color: white; resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary pulse-glow" style="width: 100%; padding: 20px; border-radius: 50px;">JOIN HYDERABAD'S LEADING FITNESS COMMUNITY</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section style="padding: 0;">
    <div style="width: 100%; height: 500px; background: #111; overflow: hidden; position: relative;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(5,5,5,0.5), rgba(5,5,5,0.5)); z-index: 1; pointer-events: none;"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3160407063!2d78.2679590416972!3d17.41229980164624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1685714000000!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<?php include('includes/footer.php'); ?>
