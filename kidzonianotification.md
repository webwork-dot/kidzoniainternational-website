# Kidzonia International Notifications

## Admission / Contact / Callback / Download Brochure (same flow)

**Submit endpoint:** `check_admission_enquiry`  
**Handler:** `Crud_model::check_admission_enquiry`  
**Data saved in:** `admission_enquiry` (+ `kcis_leads.leads`, `kcis_leads.leads_log`, `kcis_leads.notifications_log`)

---

## Forms

### `/admission-enquiry`
- Form type: `admission_enquiry`
- Notifications sent: Email + SMS + WhatsApp + tracking email

### Download Brochure (header modal)
- Modal: `modal_enquiry_download_brochure`
- Form type: `download_brochure`
- Notifications sent: Email + SMS + WhatsApp + tracking email
- Extra response: returns `download_url` = `download_brochure_url`

### `/contact-us`
- Form type: `contact_us`
- Notifications sent: Email + SMS + WhatsApp + tracking email

### Request a Callback (header/sidebar modal)
- Modal: `modal_enquiry_now`
- Form type: `callback`
- Notifications sent: Email + SMS + WhatsApp + tracking email

---

## Careers Form (separate flow)

### `/career` (Apply Job modal)
- Submit endpoint: `ajax_submit_career`
- Handler: `Crud_model::ajax_submit_career`
- Data saved in: `career_enquiry` (resume upload in `uploads/career_enquiry/...`)
- External push: `http://panel.surakaedusociety.com/hr/remote_career_leads`
- Notifications sent: Email + WhatsApp + SMS (career thank-you)

### Career notifications (`ajax_submit_career`)

#### 1. Email (to applicant)
- **Handler:** `Crud_model::send_career_application_email`
- **Provider:** ZeptoMail (via `Email_model::sent_simple_mail`)
- **From:** no-reply@kidzoniainternational.in
- **Subject:** Thank You for Your Career Application - Kidzonia International
- **Branded HTML:** `Email_model::sample_mail_message()` with KIPS header logo
- **Logo URL:** `https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png`

#### 2. WhatsApp (to applicant)
- **Handler:** `Crud_model::send_career_application_whatsapp`
- **Provider:** Interakt
- **Template:** `kidzonia_career_inquiry`
- **Language:** en
- **Header image:** `https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png`
- **Body variables:**
  - `{{1}}` — Applicant name
  - `{{2}}` — Job title (`career_name`)
  - `{{3}}` — Branch / center name
  - `{{4}}` — Website URL (`www.kidzoniainternational.in`)

#### 3. SMS (to applicant)
- **Handler:** `Crud_model::send_career_application_sms`
- **Provider:** Buzzify
- **Sender ID:** KIPSES
- **Template ID:** `1207178170992440494`
- **PE ID:** `1501706900000037814`
- **Variables:** name, position, branch
- **Message:**
  ```
  Dear {name} , Thank you for applying for {position} at Kidzonia International, {branch} . We have received your career application. Our HR team will contact you shortly. Team KIPS
  ```

---

## Notification Providers (for `check_admission_enquiry` flow)

### 1. Email (to parent)
- **Handler:** `Crud_model::send_admission_enquiry_email`
- **Provider:** ZeptoMail (via `Email_model::sent_simple_mail`)
- **From:** `no-reply@kidzoniainternational.in`
- **Subject:** `Thank You for Your Admission Enquiry - Kidzonia International`
- **Branded HTML:** `Email_model::sample_mail_message()` with KIPS header logo
- **Logo URL:** `https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png`
- **Body:** Inquiry thank-you with website, Instagram, Facebook, YouTube, and contact/location links
- **Sign-off:** Team Kidzonia International

### 2. SMS (to parent)
- **Provider:** Buzzify
- **Sender ID:** `KIPSES`
- **Template ID:** `1207178169265515300` (Thank you KIPS 2026)
- **PE ID:** `1501706900000037814`
- **Message:** Dear Parent, Thank you for connecting with Kidzonia International School! We've received your inquiry and our team will contact you shortly regarding admissions. Warm regards, Team KIPS

### 3. WhatsApp (to parent)
- **Handler:** `Crud_model::send_admission_enquiry_whatsapp`
- **Provider:** Interakt
- **Template:** `submitted_online_enquiry_all_kcis_and_kips_gg`
- **Language:** `en`
- **Header:** None
- **Body variables:**
  - `{{1}}` — Parent / student name
  - `{{2}}` — `KIPS` (renders as “Team KIPS Admissions”)
- **Body text:**
  ```
  Dear {{1}},

  We are grateful for your recent inquiry and appreciate your interest in our school.

  Your questions are important to us, and we thank you for reaching out.

  Our team will get back to you shortly to address all your queries.

  Warm regards,
  Team {{2}} Admissions
  ```

### 4. Tracking Email (internal)
- **Provider:** ZeptoMail (via `Email_model::sent_simple_mail`)
- **Sent to:** `tracking_notification_email` in config
- **Current config value:** `ashutoshsingh752000@gmail.com`

---

## Legacy (not used by current main modals/pages above)

Old brochure flow:
- Endpoint: `ajax_download_brochure_enquiry`
- Table: `brochure`
- Download endpoint: `download_brochure_url`
- No email / SMS / WhatsApp in this legacy handler

Old callback OTP flow:
- Endpoints: `ajax_call_back_enquiry`, `ajax_callback_otp_enquiry`
- Table: `call_back_enquiry`
- OTP WhatsApp template via Interakt: `kidzonia_otp`
