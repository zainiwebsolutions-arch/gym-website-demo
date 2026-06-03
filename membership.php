<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section style="padding-top: 25vh; text-align: center; position: relative; min-height: 60vh; display: flex; align-items: center; justify-content: center; background: url('https://images.unsplash.com/photo-1593079831268-3381b0db4a77?q=80&w=2069&auto=format&fit=crop') no-repeat center center/cover;">
    <div class="slide-overlay"></div>
    <div class="container reveal" style="position: relative; z-index: 2;">
        <h1 style="font-size: clamp(3rem, 8vw, 5.5rem); line-height: 1.1;">CHOOSE YOUR <span class="text-neon">FITNESS JOURNEY</span></h1>
        <p style="max-width: 650px; margin: 30px auto; font-size: 1.2rem; font-weight: 300;">Flexible membership plans designed for beginners, fitness enthusiasts, and serious athletes in Hyderabad.</p>
        
        <!-- Pricing Toggle -->
        <div style="margin-top: 50px; display: flex; align-items: center; justify-content: center; gap: 20px;">
            <span style="font-weight: 400; opacity: 0.6; letter-spacing: 1px;">MONTHLY</span>
            <div id="pricing-toggle" style="width: 70px; height: 35px; background: #111; border: 1px solid var(--glass-border); border-radius: 30px; cursor: pointer; position: relative;">
                <div id="toggle-circle" style="width: 27px; height: 27px; background: var(--primary-color); border-radius: 50%; position: absolute; top: 3px; left: 4px; transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55); box-shadow: 0 0 10px var(--primary-glow);"></div>
            </div>
            <span style="font-weight: 400; letter-spacing: 1px;">ANNUAL <span class="text-neon" style="font-size: 0.8rem; font-weight: 700;">- SAVINGS 20%</span></span>
        </div>
    </div>
</section>

<!-- Pricing Cards -->
<section style="padding: 100px 0;">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: start;">
            
            <!-- Essential -->
            <div class="card reveal delay-1 glass" style="border-radius: 30px; padding: 50px 40px;">
                <h3 style="color: var(--primary-color); font-size: 1rem; letter-spacing: 3px; margin-bottom: 10px;">ESSENTIAL</h3>
                <h2 style="font-size: 4rem; margin: 20px 0; font-family: 'Oswald';"><small style="font-size: 1.5rem; vertical-align: middle;">₹</small><span class="price-val" data-monthly="1999" data-annual="1599">1999</span><small style="font-size: 1rem; color: #fff; font-weight: 400;"> /MO</small></h2>
                <div style="height: 1px; background: var(--glass-border); margin: 30px 0;"></div>
                <ul style="margin-bottom: 40px; text-align: left; list-style: none; padding: 0;">
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Gym Access</li>
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Cardio Zone</li>
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Strength Area</li>
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Locker Facility</li>
                </ul>
                <a href="contact.php" class="btn btn-outline" style="width: 100%; border-radius: 50px; padding: 15px;">BOOK FREE TRIAL</a>
            </div>

            <!-- Premium -->
            <div class="card reveal delay-2" style="background: linear-gradient(145deg, #111 0%, #050505 100%); border: 2px solid var(--primary-color); border-radius: 35px; padding: 60px 45px; transform: scale(1.05); box-shadow: 0 40px 80px rgba(0,0,0,0.6);">
                <div style="position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: var(--primary-color); color: #000; padding: 8px 25px; font-size: 0.75rem; border-radius: 50px; font-weight: 900; letter-spacing: 1px;">MOST CHOSEN</div>
                <h3 style="color: var(--primary-color); font-size: 1rem; letter-spacing: 3px; margin-bottom: 10px;">PREMIUM</h3>
                <h2 style="font-size: 4.5rem; margin: 20px 0; font-family: 'Oswald';"><small style="font-size: 1.5rem; vertical-align: middle;">₹</small><span class="price-val" data-monthly="3499" data-annual="2999">3499</span><small style="font-size: 1rem; color: #fff; font-weight: 400;"> /MO</small></h2>
                <div style="height: 1px; background: rgba(198,255,0,0.2); margin: 30px 0;"></div>
                <ul style="margin-bottom: 40px; text-align: left; list-style: none; padding: 0;">
                    <li style="margin-bottom: 18px; font-size: 1.05rem; font-weight: 500;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Everything in Essential</li>
                    <li style="margin-bottom: 18px; font-size: 1.05rem; font-weight: 500;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Group Classes</li>
                    <li style="margin-bottom: 18px; font-size: 1.05rem; font-weight: 500;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Nutrition Guidance</li>
                    <li style="margin-bottom: 18px; font-size: 1.05rem; font-weight: 500;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Recovery Zone Access</li>
                </ul>
                <a href="contact.php" class="btn btn-primary pulse-glow" style="width: 100%; border-radius: 50px; padding: 18px; border: none;">BOOK FREE TRIAL</a>
            </div>

            <!-- Elite -->
            <div class="card reveal delay-3 glass" style="border-radius: 30px; padding: 50px 40px;">
                <h3 style="color: var(--primary-color); font-size: 1rem; letter-spacing: 3px; margin-bottom: 10px;">ELITE</h3>
                <h2 style="font-size: 4rem; margin: 20px 0; font-family: 'Oswald'; text-shadow: 0 0 20px rgba(255,255,255,0.05);"><small style="font-size: 1.5rem; vertical-align: middle;">₹</small><span class="price-val" data-monthly="6999" data-annual="5999">6999</span><small style="font-size: 1rem; color: #fff; font-weight: 400;"> /MO</small></h2>
                <div style="height: 1px; background: var(--glass-border); margin: 30px 0;"></div>
                <ul style="margin-bottom: 40px; text-align: left; list-style: none; padding: 0;">
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Everything in Premium</li>
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Personal Training</li>
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Priority Support</li>
                    <li style="margin-bottom: 18px; font-size: 1rem;"><i class="fas fa-check text-neon" style="margin-right: 15px;"></i> Customized Program</li>
                </ul>
                <a href="contact.php" class="btn btn-outline" style="width: 100%; border-radius: 50px; padding: 15px;">BOOK FREE TRIAL</a>
            </div>
        </div>
    </div>
</section>

<script>
    const toggleBtn = document.getElementById('pricing-toggle');
    const circle = document.getElementById('toggle-circle');
    const prices = document.querySelectorAll('.price-val');
    let isAnnual = false;

    toggleBtn.addEventListener('click', () => {
        isAnnual = !isAnnual;
        if (isAnnual) {
            circle.style.left = '39px';
            prices.forEach(price => {
                price.innerText = price.getAttribute('data-annual');
            });
        } else {
            circle.style.left = '4px';
            prices.forEach(price => {
                price.innerText = price.getAttribute('data-monthly');
            });
        }
    });
</script>

<?php include('includes/footer.php'); ?>