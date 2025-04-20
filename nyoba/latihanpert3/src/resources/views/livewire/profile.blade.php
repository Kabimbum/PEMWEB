<!-- resources/views/livewire/profile.blade.php -->
<div>
    <div class="profile-header text-center">
        <img src="{{ asset('front/assets/img/ipad.png') }}" alt="Profile Picture" class="profile-img mb-3">
        <h2>Muhammad Gibran Hakim</h2>
        <p class="lead">Computer Science Student | Graphic Designer | Videographer</p>
    </div>

    <div class="container my-5">
        <div class="row g-4">
            <!-- About Section -->
            <div class="col-lg-6">
                <div class="card shadow-sm p-4">
                    <h4>About Me</h4>
                    <p>I’m an <strong>antusias</strong> computer science student at Universitas AA UU with a strong passion in graphic design and videography. I hold professional certifications from BNSP and PT. Science and Technology, and have been active in creative and organizational projects since vocational school.</p>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="col-lg-6">
                <div class="card shadow-sm p-4">
                    <h4>Contact Info</h4>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> gibran@example.com</li>
                        <li><strong>Phone:</strong> +62 812-3456-7890</li>
                        <li><strong>Location:</strong> Tangerang, Indonesia</li>
                    </ul>
                </div>
            </div>

            <!-- Skills Section -->
            <div class="col-lg-12">
                <div class="card shadow-sm p-4">
                    <h4>Skills</h4>
                    <div class="mb-2">
                        <strong>Graphic Design</strong>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%">90%</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <strong>Videography</strong>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%">85%</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <strong>Web Development</strong>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <strong>Leadership & Organization</strong>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%">80%</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="text-center text-muted py-4">
        &copy; 2025 Muhammad Gibran Hakim — All Rights Reserved.
    </footer>
</div>
