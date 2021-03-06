<div>
    <footer class="footer">
        <div class="social-footer">
            {{-- <img class="logo-footer" src="build/img/logo.svg" alt="logo"> --}}
            
            <a href="{{ route('home') }}">
                <x-jet-application-mark class="logo" />
            </a>

            <div class="networks">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-twitter"></i>
            </div>
            <p class="copyright">All rights reserved &#174; Filmtono <?php echo date('Y'); ?></p>
        </div>

        <div class="contact-footer">
            <h3>Contact Us</h3>
            <p>email@filmtono.com</p>
        </div>

        <div class="terms-footer">
            <a href="">Privacy Policy</a>
            <a href="">Terms of Service</a>
            <a href="">Cookie Policy</a>
            <a href="">Cookie Preference</a>
        </div>
    </footer>
</div>
