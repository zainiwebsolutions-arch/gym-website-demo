<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<section style="padding-top: 20vh; text-align: center; position: relative; min-height: 50vh; display: flex; align-items: center; justify-content: center; background: url('https://images.unsplash.com/photo-1540497077202-7c8a3999166f?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;">
    <div class="slide-overlay"></div>
    <div class="container reveal" style="position: relative; z-index: 2;">
        <h1 style="font-size: clamp(3rem, 10vw, 6rem); line-height: 1.1; margin-bottom: 20px;">EXPERIENCE <span class="text-neon">IRON EDGE FITNESS</span></h1>
        <p style="max-width: 700px; margin: 30px auto; font-size: 1.2rem; font-weight: 300;">Explore our premium fitness environment, training zones, recovery areas, and transformation success stories in Hyderabad.</p>
    </div>
</section>

<!-- Gallery Section -->
<section style="padding-top: 80px;">
    <div class="container">
        
        <!-- Category Tabs -->
        <div style="display: flex; gap: 20px; justify-content: center; margin-bottom: 50px; flex-wrap: wrap;">
            <button class="gallery-filter-btn active" data-filter="all" style="padding: 12px 30px; border-radius: 30px; font-size: 0.8rem; background: var(--primary-color); color: #000; border: 2px solid var(--primary-color); cursor: pointer; font-family: 'Oswald'; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">ALL</button>
            <button class="gallery-filter-btn" data-filter="strength" style="padding: 12px 30px; border-radius: 30px; font-size: 0.8rem; background: transparent; color: var(--primary-color); border: 2px solid var(--primary-color); cursor: pointer; font-family: 'Oswald'; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">STRENGTH ZONE</button>
            <button class="gallery-filter-btn" data-filter="cardio" style="padding: 12px 30px; border-radius: 30px; font-size: 0.8rem; background: transparent; color: var(--primary-color); border: 2px solid var(--primary-color); cursor: pointer; font-family: 'Oswald'; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">CARDIO ZONE</button>
            <button class="gallery-filter-btn" data-filter="functional" style="padding: 12px 30px; border-radius: 30px; font-size: 0.8rem; background: transparent; color: var(--primary-color); border: 2px solid var(--primary-color); cursor: pointer; font-family: 'Oswald'; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">FUNCTIONAL AREA</button>
            <button class="gallery-filter-btn" data-filter="recovery" style="padding: 12px 30px; border-radius: 30px; font-size: 0.8rem; background: transparent; color: var(--primary-color); border: 2px solid var(--primary-color); cursor: pointer; font-family: 'Oswald'; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">RECOVERY ZONE</button>
        </div>

        <div id="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
            
            <!-- Gallery Item 1 -->
            <div class="gallery-item strength reveal delay-1" style="position: relative; overflow: hidden; border-radius: 20px; height: 350px; background: #111; transition: all 0.5s ease-in-out;">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop" alt="Strength Zone Hyderabad" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(40%); transition: 0.5s;" onmouseover="this.style.filter='none'; this.style.transform='scale(1.1)'" onmouseout="this.style.filter='grayscale(40%)'; this.style.transform='scale(1)'">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));">
                    <p style="color: var(--primary-color) !important; font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin: 0;">STRENGTH ZONE</p>
                    <h3 style="font-size: 1.2rem; margin-top: 5px;">Elite Power Station</h3>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item cardio reveal delay-2" style="position: relative; overflow: hidden; border-radius: 20px; height: 350px; background: #111; transition: all 0.5s ease-in-out;">
                <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?q=80&w=2069&auto=format&fit=crop" alt="Cardio Zone Hyderabad" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(40%); transition: 0.5s;" onmouseover="this.style.filter='none'; this.style.transform='scale(1.1)'" onmouseout="this.style.filter='grayscale(40%)'; this.style.transform='scale(1)'">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));">
                    <p style="color: var(--primary-color) !important; font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin: 0;">CARDIO ZONE</p>
                    <h3 style="font-size: 1.2rem; margin-top: 5px;">Future Conservatory</h3>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item functional reveal delay-3" style="position: relative; overflow: hidden; border-radius: 20px; height: 350px; background: #111; transition: all 0.5s ease-in-out;">
                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1470&auto=format&fit=crop" alt="Functional Training Hyderabad" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(40%); transition: 0.5s;" onmouseover="this.style.filter='none'; this.style.transform='scale(1.1)'" onmouseout="this.style.filter='grayscale(40%)'; this.style.transform='scale(1)'">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));">
                    <p style="color: var(--primary-color) !important; font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin: 0;">FUNCTIONAL AREA</p>
                    <h3 style="font-size: 1.2rem; margin-top: 5px;">Performance Turf</h3>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item strength reveal delay-1" style="position: relative; overflow: hidden; border-radius: 20px; height: 350px; background: #111; transition: all 0.5s ease-in-out;">
                <img src="https://images.unsplash.com/photo-1594381898411-846e7d193883?q=80&w=1974&auto=format&fit=crop" alt="Personal Training Hyderabad" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(40%); transition: 0.5s;" onmouseover="this.style.filter='none'; this.style.transform='scale(1.1)'" onmouseout="this.style.filter='grayscale(40%)'; this.style.transform='scale(1)'">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));">
                    <p style="color: var(--primary-color) !important; font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin: 0;">STRENGTH</p>
                    <h3 style="font-size: 1.2rem; margin-top: 5px;">Bespoke Training</h3>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item recovery reveal delay-2" style="position: relative; overflow: hidden; border-radius: 20px; height: 350px; background: #111; transition: all 0.5s ease-in-out;">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop" alt="Recovery Zone Hyderabad" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(40%); transition: 0.5s;" onmouseover="this.style.filter='none'; this.style.transform='scale(1.1)'" onmouseout="this.style.filter='grayscale(40%)'; this.style.transform='scale(1)'">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));">
                    <p style="color: var(--primary-color) !important; font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin: 0;">RECOVERY ZONE</p>
                    <h3 style="font-size: 1.2rem; margin-top: 5px;">Zen Suite</h3>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item cardio reveal delay-3" style="position: relative; overflow: hidden; border-radius: 20px; height: 350px; background: #111; transition: all 0.5s ease-in-out;">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop" alt="Member Experience Hyderabad" style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(40%); transition: 0.5s;" onmouseover="this.style.filter='none'; this.style.transform='scale(1.1)'" onmouseout="this.style.filter='grayscale(40%)'; this.style.transform='scale(1)'">
                <div style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 25px; background: linear-gradient(transparent, rgba(0,0,0,0.9));">
                    <p style="color: var(--primary-color) !important; font-size: 0.8rem; letter-spacing: 2px; font-weight: 700; margin: 0;">ELITE EXPERIENCE</p>
                    <h3 style="font-size: 1.2rem; margin-top: 5px;">Community Atmosphere</h3>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
