<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Website Consultation Request — Webvire</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #edf2f9;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      color: #334155;
      -webkit-font-smoothing: antialiased;
    }
    .wrapper {
      width: 100%;
      background-color: #edf2f9;
      padding: 30px 12px;
      box-sizing: border-box;
    }
    .main-card {
      max-width: 620px;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 0px;
      box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
      border: 1px solid #cbd5e1;
    }
    .top-header {
      padding: 36px 28px 24px 28px;
      text-align: center;
      background-color: #ffffff;
    }
    .logo-img {
      height: 48px;
      width: auto;
      display: inline-block;
      margin-bottom: 20px;
    }
    .header-title {
      font-size: 24px;
      font-weight: 800;
      color: #0b152e;
      margin: 0 0 8px 0;
      letter-spacing: -0.4px;
    }
    .header-subtitle {
      font-size: 14px;
      color: #64748b;
      margin: 0 0 4px 0;
    }
    .header-subtitle a {
      color: #2563eb;
      font-weight: 600;
      text-decoration: underline;
    }
    .header-subtext {
      font-size: 14px;
      color: #64748b;
      margin: 0;
    }
    .body-content {
      padding: 0 28px 28px 28px;
    }
    .inner-box {
      background-color: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 0px;
      padding: 24px;
    }
    
    /* 2-Column Grid Table */
    .grid-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0 16px;
    }
    .grid-table td {
      width: 50%;
      vertical-align: middle;
      padding: 6px 8px;
    }

    .icon-box {
      width: 44px;
      height: 44px;
      border-radius: 0px;
      display: inline-block;
      text-align: center;
      vertical-align: middle;
      margin-right: 12px;
    }
    .icon-blue { background-color: #eff6ff; }
    .icon-purple { background-color: #f3e8ff; }
    .icon-green { background-color: #dcfce7; }
    .icon-orange { background-color: #ffedd5; }

    .embedded-icon {
      width: 22px;
      height: 22px;
      vertical-align: middle;
      display: inline-block;
      margin-top: 11px;
    }

    .cell-label {
      font-size: 12px;
      font-weight: 600;
      color: #64748b;
      margin-bottom: 2px;
    }
    .cell-value {
      font-size: 14.5px;
      font-weight: 800;
      color: #0f172a;
    }
    .cell-value a {
      color: #2563eb !important;
      text-decoration: none;
    }

    .service-pill {
      display: inline-block;
      background-color: #eff6ff;
      color: #2563eb;
      border: 1px solid #bfdbfe;
      font-size: 12px;
      font-weight: 700;
      padding: 3px 10px;
      border-radius: 0px;
    }
    .budget-pill {
      display: inline-block;
      background-color: #dcfce7;
      color: #15803d;
      border: 1px solid #bbf7d0;
      font-size: 12px;
      font-weight: 700;
      padding: 3px 10px;
      border-radius: 0px;
    }

    /* Message Box */
    .message-card {
      background-color: #f0f7ff;
      border-radius: 0px;
      padding: 16px 20px;
      margin-top: 16px;
      margin-bottom: 24px;
      border-left: 3px solid #2563eb;
    }
    .msg-icon-circle {
      width: 36px;
      height: 36px;
      border-radius: 0px;
      background-color: #2563eb;
      display: inline-block;
      text-align: center;
      vertical-align: top;
      margin-right: 12px;
    }
    .msg-embedded-icon {
      width: 18px;
      height: 18px;
      vertical-align: middle;
      margin-top: 9px;
    }
    .msg-content {
      display: inline-block;
      width: calc(100% - 56px);
      vertical-align: top;
    }
    .msg-title {
      font-size: 13.5px;
      font-weight: 700;
      color: #2563eb;
      margin-bottom: 4px;
    }
    .msg-text {
      font-size: 14px;
      color: #1e293b;
      line-height: 1.6;
      margin: 0;
      white-space: pre-wrap;
    }

    /* Navy Reply Button */
    .btn-reply {
      display: block;
      width: 100%;
      box-sizing: border-box;
      text-align: center;
      background-color: #0b1e4c;
      color: #ffffff !important;
      font-weight: 700;
      font-size: 15px;
      padding: 15px 24px;
      border-radius: 0px;
      text-decoration: none !important;
      -webkit-text-size-adjust: none;
    }

    /* Dark Footer Banner */
    .dark-footer {
      background-color: #070e24;
      padding: 32px 24px;
      text-align: center;
      color: #94a3b8;
      font-size: 13px;
      border-radius: 0px;
    }
    .footer-logo-badge {
      width: 44px;
      height: 44px;
      border-radius: 0px;
      background-color: #0e1d44;
      border: 1px solid #1c3269;
      display: inline-block;
      text-align: center;
      line-height: 44px;
      margin-bottom: 14px;
    }
    .footer-logo-img {
      height: 22px;
      width: auto;
      vertical-align: middle;
    }
    .footer-text {
      color: #94a3b8;
      font-size: 13px;
      line-height: 1.6;
      margin-bottom: 20px;
    }
    .footer-text strong {
      color: #2563eb;
    }
    
    .footer-divider {
      border-top: 1px solid #15244c;
      margin-bottom: 20px;
    }

    .footer-contact-table {
      width: 100%;
      border-collapse: collapse;
    }
    .footer-contact-table td {
      width: 33.33%;
      text-align: center;
      font-size: 12px;
      color: #cbd5e1;
      padding: 4px;
    }
    .footer-icon-sq {
      width: 28px;
      height: 28px;
      border-radius: 0px;
      display: inline-block;
      text-align: center;
      margin-right: 6px;
      vertical-align: middle;
    }
    .sq-blue { background-color: #2563eb; }
    .sq-purple { background-color: #9333ea; }
    .sq-green { background-color: #16a34a; }

    .footer-embedded-icon {
      width: 14px;
      height: 14px;
      vertical-align: middle;
      margin-top: 7px;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="main-card">

      <!-- Top Header -->
      <div class="top-header">
        @if(isset($message))
          <img src="{{ $message->embed(public_path('assets/logo.png')) }}" alt="Webvire Logo" class="logo-img">
        @else
          <img src="{{ asset('assets/logo.png') }}" alt="Webvire Logo" class="logo-img">
        @endif

        <h1 class="header-title">New Website Consultation Request</h1>
        <p class="header-subtitle">A new project lead has been submitted via <a href="https://webvire.com">webvire.com</a>.</p>
        <p class="header-subtext">Details are summarized below:</p>
      </div>

      <!-- Main Body -->
      <div class="body-content">
        <div class="inner-box">
          
          <!-- 2-Column Grid Table -->
          <table class="grid-table">
            <!-- Row 1: Sender Name & Email Address -->
            <tr>
              <td>
                <div style="display: flex; align-items: center;">
                  <div class="icon-box icon-blue">
                    @if(isset($message))
                      <img src="{{ $message->embed(public_path('assets/email-icons/user.png')) }}" alt="User" class="embedded-icon">
                    @else
                      <img src="{{ asset('assets/email-icons/user.png') }}" alt="User" class="embedded-icon">
                    @endif
                  </div>
                  <div>
                    <div class="cell-label">Sender Name</div>
                    <div class="cell-value">{{ $contactData['name'] }}</div>
                  </div>
                </div>
              </td>
              <td>
                <div style="display: flex; align-items: center;">
                  <div class="icon-box icon-purple">
                    @if(isset($message))
                      <img src="{{ $message->embed(public_path('assets/email-icons/email.png')) }}" alt="Email" class="embedded-icon">
                    @else
                      <img src="{{ asset('assets/email-icons/email.png') }}" alt="Email" class="embedded-icon">
                    @endif
                  </div>
                  <div>
                    <div class="cell-label">Email Address</div>
                    <div class="cell-value">
                      <a href="mailto:{{ $contactData['email'] }}">{{ $contactData['email'] }}</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row 2: Phone Number & Service Required -->
            <tr>
              <td>
                <div style="display: flex; align-items: center;">
                  <div class="icon-box icon-green">
                    @if(isset($message))
                      <img src="{{ $message->embed(public_path('assets/email-icons/phone.png')) }}" alt="Phone" class="embedded-icon">
                    @else
                      <img src="{{ asset('assets/email-icons/phone.png') }}" alt="Phone" class="embedded-icon">
                    @endif
                  </div>
                  <div>
                    <div class="cell-label">Phone Number</div>
                    <div class="cell-value">
                      @if(!empty($contactData['phone']))
                        <a href="tel:{{ $contactData['phone'] }}">{{ $contactData['phone'] }}</a>
                      @else
                        <span style="color: #94a3b8; font-weight: 500;">N/A</span>
                      @endif
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div style="display: flex; align-items: center;">
                  <div class="icon-box icon-blue">
                    @if(isset($message))
                      <img src="{{ $message->embed(public_path('assets/email-icons/service.png')) }}" alt="Service" class="embedded-icon">
                    @else
                      <img src="{{ asset('assets/email-icons/service.png') }}" alt="Service" class="embedded-icon">
                    @endif
                  </div>
                  <div>
                    <div class="cell-label">Service Required</div>
                    <div class="cell-value">
                      <span class="service-pill">{{ $contactData['subject'] }}</span>
                    </div>
                  </div>
                </div>
              </td>
            </tr>

            <!-- Row 3: Estimated Budget & Received Time -->
            <tr>
              <td>
                <div style="display: flex; align-items: center;">
                  <div class="icon-box icon-green">
                    @if(isset($message))
                      <img src="{{ $message->embed(public_path('assets/email-icons/budget.png')) }}" alt="Budget" class="embedded-icon">
                    @else
                      <img src="{{ asset('assets/email-icons/budget.png') }}" alt="Budget" class="embedded-icon">
                    @endif
                  </div>
                  <div>
                    <div class="cell-label">Estimated Budget</div>
                    <div class="cell-value">
                      @if(!empty($contactData['budget']))
                        <span class="budget-pill">{{ $contactData['budget'] }}</span>
                      @else
                        <span style="color: #94a3b8; font-weight: 500;">N/A</span>
                      @endif
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <div style="display: flex; align-items: center;">
                  <div class="icon-box icon-orange">
                    @if(isset($message))
                      <img src="{{ $message->embed(public_path('assets/email-icons/time.png')) }}" alt="Time" class="embedded-icon">
                    @else
                      <img src="{{ asset('assets/email-icons/time.png') }}" alt="Time" class="embedded-icon">
                    @endif
                  </div>
                  <div>
                    <div class="cell-label">Received Time</div>
                    <div class="cell-value" style="font-size: 13px; color: #334155; font-weight: 600;">
                      {{ now()->timezone('Asia/Kolkata')->format('d M Y, h:i A') }} IST
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>

          <!-- Message Card -->
          <div class="message-card">
            <div class="msg-icon-circle">
              @if(isset($message))
                <img src="{{ $message->embed(public_path('assets/email-icons/chat.png')) }}" alt="Chat" class="msg-embedded-icon">
              @else
                <img src="{{ asset('assets/email-icons/chat.png') }}" alt="Chat" class="msg-embedded-icon">
              @endif
            </div>
            <div class="msg-content">
              <div class="msg-title">Project Message / Notes</div>
              <p class="msg-text">{{ $contactData['message'] }}</p>
            </div>
          </div>

          <!-- Navy Reply Button -->
          <a href="mailto:{{ $contactData['email'] }}?subject=Re:%20Inquiry%20about%20{{ urlencode($contactData['subject']) }}%20-%20Webvire%20Technologies" class="btn-reply">
            @if(isset($message))
              <img src="{{ $message->embed(public_path('assets/email-icons/send.png')) }}" alt="Send" style="width: 16px; height: 16px; vertical-align: middle; margin-right: 6px; margin-top: -2px;">
            @endif
            <span style="color: #ffffff !important; text-decoration: none !important;">Reply to Inquiry</span>
          </a>

        </div>
      </div>

      <!-- Dark Footer Banner -->
      <div class="dark-footer">
        <div class="footer-logo-badge">
          @if(isset($message))
            <img src="{{ $message->embed(public_path('assets/logo.png')) }}" alt="Webvire Mark" class="footer-logo-img">
          @else
            <img src="{{ asset('assets/logo.png') }}" alt="Webvire Mark" class="footer-logo-img">
          @endif
        </div>
        
        <p class="footer-text">
          This is an automated inquiry alert from <strong>Webvire Technologies</strong> Website Portal.
        </p>

        <div class="footer-divider"></div>

        <table class="footer-contact-table">
          <tr>
            <td>
              <span class="footer-icon-sq sq-blue">
                @if(isset($message))
                  <img src="{{ $message->embed(public_path('assets/email-icons/location.png')) }}" alt="Location" class="footer-embedded-icon">
                @else
                  <img src="{{ asset('assets/email-icons/location.png') }}" alt="Location" class="footer-embedded-icon">
                @endif
              </span>
              <span>Kursi Road, Gudamba, Lucknow</span>
            </td>
            <td>
              <span class="footer-icon-sq sq-purple">
                @if(isset($message))
                  <img src="{{ $message->embed(public_path('assets/email-icons/email.png')) }}" alt="Email" class="footer-embedded-icon">
                @else
                  <img src="{{ asset('assets/email-icons/email.png') }}" alt="Email" class="footer-embedded-icon">
                @endif
              </span>
              <span>info@webvire.com</span>
            </td>
            <td>
              <span class="footer-icon-sq sq-green">
                @if(isset($message))
                  <img src="{{ $message->embed(public_path('assets/email-icons/phone.png')) }}" alt="Phone" class="footer-embedded-icon">
                @else
                  <img src="{{ asset('assets/email-icons/phone.png') }}" alt="Phone" class="footer-embedded-icon">
                @endif
              </span>
              <span>+91 7309277237</span>
            </td>
          </tr>
        </table>
      </div>

    </div>
  </div>
</body>
</html>
