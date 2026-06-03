<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section style="padding-top: 25vh; text-align: center; position: relative; min-height: 60vh; display: flex; align-items: center; justify-content: center; background: url('https://images.unsplash.com/photo-1594381898411-846e7d193883?q=80&w=1974&auto=format&fit=crop') no-repeat center center/cover;">
    <div class="slide-overlay"></div>
    <div class="container reveal" style="position: relative; z-index: 2;">
        <h1 style="font-size: clamp(3rem, 10vw, 6rem); line-height: 1.1; margin-bottom: 20px;">FITNESS PROFESSIONALS <span class="text-neon">DEDICATED TO YOUR SUCCESS</span></h1>
        <p style="max-width: 700px; margin: 30px auto; font-size: 1.2rem; font-weight: 300;">Our experienced trainers combine science-based training methods with personalized coaching to help members achieve exceptional results in Hyderabad.</p>
    </div>
</section>

<!-- Coaches Section -->
<section style="padding: 100px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">
            <div class="card reveal-left glass" style="padding: 0; overflow: hidden; border-radius: 30px;">
                <img src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?q=80&w=1974&auto=format&fit=crop" alt="Rahul Sharma" style="width: 100%; height: 450px; object-fit: cover;">
                <div style="padding: 40px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.8rem;">RAHUL SHARMA</h3>
                    <p class="text-neon" style="letter-spacing: 2px; font-size: 0.9rem; margin-bottom: 20px; font-weight: 700;">ELITE STRENGTH COACH</p>
                    <p style="margin-bottom: 25px;">Expert in biomechanics and high-performance strength training for athletes and professionals.</p>
                    <div style="display: flex; gap: 20px;">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="card reveal-right glass" style="padding: 0; overflow: hidden; border-radius: 30px;">
                <img src="https://images.unsplash.com/photo-1518310383802-640c2de311b2?q=80&w=1470&auto=format&fit=crop" alt="Priya Reddy" style="width: 100%; height: 450px; object-fit: cover;">
                <div style="padding: 40px;">
                    <h3 style="margin-bottom: 10px; font-size: 1.8rem;">PRIYA REDDY</h3>
                    <p class="text-neon" style="letter-spacing: 2px; font-size: 0.9rem; margin-bottom: 20px; font-weight: 700;">FAT LOSS SPECIALIST</p>
                    <p style="margin-bottom: 25px;">Helping members achieve sustainable body transformations through holistic metabolic conditioning and nutrition.</p>
                    <div style="display: flex; gap: 20px;">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Work With A Personal Trainer? -->
<section style="background: #050505; border-top: 1px solid var(--glass-border); padding: 100px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 80px; align-items: center;">
            <div class="reveal-left">
                <h2 class="section-title" style="margin-bottom: 40px;">WHY WORK WITH A <span class="text-neon">PERSONAL TRAINER?</span></h2>
                <div style="display: grid; gap: 25px; margin-bottom: 40px;">
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <i class="fas fa-bolt text-neon" style="font-size: 1.4rem;"></i>
                        <span style="font-size: 1.1rem;">Faster Results through scientific efficiency</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <i class="fas fa-shield-alt text-neon" style="font-size: 1.4rem;"></i>
                        <span style="font-size: 1.1rem;">Better Technique & Reduced Injury Risk</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <i class="fas fa-calendar-check text-neon" style="font-size: 1.4rem;"></i>
                        <span style="font-size: 1.1rem;">Unwavering Accountability & Progress Tracking</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 20px;">
                        <i class="fas fa-fire text-neon" style="font-size: 1.4rem;"></i>
                        <span style="font-size: 1.1rem;">Maximum Motivation on every set</span>
                    </div>
                </div>
            </div>
            <div class="reveal-right">
                <div class="card glass" style="padding: 60px; border-radius: 35px; border-left: 6px solid var(--primary-color);">
                    <h3 style="margin-bottom: 25px; font-size: 1.8rem;">CERTIFIED FITNESS TRAINER HYDERABAD</h3>
                    <p style="margin-bottom: 35px; font-size: 1.1rem;">Our coaches are globally certified experts dedicated to helping you master your body and mind through bespoke training programs.</p>
                    <a href="contact.php" class="btn btn-primary pulse-glow" style="width: 100%; text-align: center; border-radius: 50px; padding: 20px;">BOOK A FREE CONSULTATION</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
