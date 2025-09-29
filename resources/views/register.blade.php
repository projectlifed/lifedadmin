<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>HealthMate Registration</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
</head>

<body>
    @include('layouts.header')
    <div class="container">
        <h1>HealthMate Registration</h1>
        <div class="steps">
            <div class="step active">
                <div class="step-circle">1</div>
            </div>
            <div class="step-bar"></div>
            <div class="step inactive">
                <div class="step-circle">2</div>
            </div>
        </div>
        <form method="POST" action="{{ route('healthmate.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="centre">Centre Name</label>
                    <input type="text" id="centre" name="centre_name" placeholder="Enter centre name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <div class="email-row">
                        <input type="email" id="email" name="email" placeholder="Enter email">
                        <button type="button" class="verify-btn">Verify Email</button>
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 24px;">
                <label for="address">Address</label>
                <textarea id="address" name="address" placeholder="Enter address"></textarea>
            </div>

            <div class="country-row">
                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country" name="country">
                        <option>Select Country</option>
                        <option>India</option>
                        <option>USA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <select id="state" name="state">
                        <option>Select State</option>
                        <option>Kerala</option>
                        <option>Tamil Nadu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <select id="city" name="city">
                        <option>Select City</option>
                        <option>Trivandrum</option>
                        <option>Kochi</option>
                    </select>
                </div>
            </div>

            <!-- New Password Fields -->
            <div class="password-row">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Confirm password">
                </div>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>

    </div>
    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->
</body>

</html>
