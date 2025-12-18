# Kidzonia International Website - Project Analysis

## Executive Summary

This is a **CodeIgniter 3.x-based educational institution website** for Kidzonia International, a preschool/nursery school with multiple branches in Hyderabad, Mumbai, and Pune. The project consists of two main components:
1. **Frontend Website** - Public-facing website for parents and visitors
2. **Master Panel** - Administrative backend for content management

---

## Technology Stack

### Backend
- **Framework**: CodeIgniter 3.x (PHP MVC Framework)
- **PHP Version**: >= 5.3.7 (legacy requirement)
- **Database**: MySQL (MySQLi driver)
- **Timezone**: Asia/Kolkata

### Frontend
- **CSS Framework**: Bootstrap 5.3.2
- **JavaScript Libraries**:
  - jQuery
  - SweetAlert2
  - Bootstrap Icons
  - Font Awesome
  - Masonry.js
  - MediaElement.js
- **Additional Plugins**: Various WordPress-style plugins (likely migrated from WordPress)

### Third-Party Integrations
- **Payment Gateways**:
  - Razorpay (primary - LIVE credentials configured)
  - Stripe (library included)
  - Paystack (library included)
- **Email Service**: SendGrid SMTP
- **Image Processing**: Intervention Image library
- **PDF Generation**: DomPDF
- **Spreadsheet**: PhpSpreadsheet
- **PDF Library**: DOMPDF

---

## Project Structure

### Main Application (`/application/`)
```
application/
├── config/          # Configuration files (routes, database, autoload)
├── controllers/     # MVC Controllers
│   ├── Home.php     # Main frontend controller (988 lines)
│   ├── Modal.php    # Modal popup handler
│   └── Cron.php     # Cron job for lead syncing
├── models/          # Data models
│   ├── Crud_model.php      # Main CRUD operations (2319 lines)
│   ├── Common_model.php    # Common database operations
│   ├── Email_model.php     # Email functionality
│   ├── Leads_sync_model.php # Lead synchronization
│   └── Upload_model.php    # File upload handling
├── views/           # View templates
│   └── frontend/default/   # 61 PHP view files
├── libraries/       # Custom libraries
│   ├── razorpay-php/       # Razorpay SDK
│   ├── Stripe/             # Stripe SDK
│   ├── dompdf/             # PDF generation
│   └── REST_Controller.php # REST API controller
├── helpers/         # Helper functions
│   ├── common_helper.php
│   ├── json_output_helper.php
│   └── pagination_helper.php
└── hooks/           # CodeIgniter hooks
    ├── RedirectOldUrls.php  # URL redirection logic
    └── UtmTracker.php       # UTM parameter tracking
```

### Master Panel (`/master-panel/`)
- Separate CodeIgniter installation for admin panel
- Located in `/master-panel/` directory
- Contains admin controllers, views, and assets
- Uses separate database configuration

### Assets (`/assets/`)
- Static files (CSS, JS, images, fonts, videos)
- Bootstrap Icons library
- Theme files
- Plugin assets

---

## Database Configuration

### Three Database Connections:

1. **Default Database** (`kidzoniainternat_kidzoniaidbc`)
   - Localhost
   - Main website database

2. **KCIS Database** (`kidzoniainternat_kcispnl_dbc`)
   - Localhost
   - Admin panel database

3. **KCIS Leads Database** (`kcispnl_dbc`)
   - Remote server: `72.61.228.172`
   - Used for lead synchronization
   - Credentials: `webwork3` / `rkGLyFGRnB35hDzw`

### Lead Synchronization
- **Model**: `Leads_sync_model.php`
- **Cron Job**: `/cron/push_leads`
- Syncs leads from local DB to remote database
- Tracks UTM parameters, referrer URLs, and campaign data

---

## Key Features & Functionality

### 1. **Content Management**
- Home page with dynamic content
- About Us section
- Our Curriculum & Programmes
- Learning Spaces & Amenities
- Awards & Recognitions
- Gallery (multiple branches)
- Blogs & Digital News
- Events
- Career pages
- Teacher profiles
- Team member profiles

### 2. **Branch Management**
- Multiple location support (Hyderabad, Mumbai, Pune)
- Branch-specific galleries and pages
- Dynamic routing: `/explore-centers/{city}/{branch-slug}`

### 3. **Enquiry System**
- Admission enquiry forms with OTP verification
- Callback request system
- Event registration
- Career application forms
- Download brochure requests
- Contact forms
- Summer camp enquiries

### 4. **Payment Integration**
- **Razorpay** (LIVE credentials active):
  - API Key: `rzp_live_CpL0Ex4V1ayty4`
  - Configured for order creation and payment processing
  - Used for admissions/payments

### 5. **Email System**
- **SendGrid SMTP** integration
- From: `noreply@kidzonia.co.in`
- HTML email templates with branding
- Social media links in footer
- Attachment support

### 6. **SEO Features**
- Meta tags (title, description, keywords)
- Canonical URLs
- Structured data (JSON-LD for organization)
- Sitemap generation (`/sitemap`)
- URL slug optimization
- Old URL redirection (301 redirects)

### 7. **Analytics & Tracking**
- UTM parameter tracking
- Referrer URL tracking
- Google Search Console verification
- Lead source tracking
- Campaign tracking

### 8. **Media Management**
- Image uploads (organized by year/category)
- Video support (MP4)
- PDF generation (brochures)
- Image resizing (Intervention Image)

### 9. **Modal System**
- AJAX-powered modals
- Dynamic content loading
- Multiple modal types:
  - Enquiry forms
  - OTP verification
  - Event registration
  - Career application
  - Gallery viewer
  - YouTube video enquiry

---

## Routing Structure

### Custom Routes (`/application/config/routes.php`)
- Clean URLs (no `index.php` in URL)
- SEO-friendly slugs
- Event route redirects (old events to 404)
- Dynamic branch routing
- Blog routing with details
- RESTful AJAX endpoints

### Key Routes:
- `/` → Home page
- `/about-us` → About page
- `/admission-enquiry` → Admissions
- `/explore-centers/{city}` → City listing
- `/explore-centers/{city}/{branch}` → Branch details
- `/blogs` → Blog listing
- `/blog-details/{slug}` → Blog detail
- `/contact-us` → Contact page
- `/career` → Career page
- `/thank-you` → Success page

---

## Security Considerations

### Current Security Status:
⚠️ **ISSUES IDENTIFIED:**
1. **Exposed Credentials**:
   - SendGrid API key hardcoded in `Email_model.php`
   - Database passwords in config files
   - Razorpay credentials in constants.php
   
2. **Security Configurations**:
   - CSRF protection: **DISABLED** (`$config['csrf_protection'] = FALSE`)
   - Global XSS filtering: **ENABLED** (deprecated)
   - Cookie secure: **FALSE** (should be TRUE for HTTPS)

3. **Session Management**:
   - File-based sessions
   - Session expiration: 7200 seconds (2 hours)
   - IP matching: **DISABLED**

### Recommendations:
- Move credentials to environment variables
- Enable CSRF protection
- Use secure cookies in production
- Implement session regeneration
- Add rate limiting for forms
- Sanitize all user inputs
- Use prepared statements (currently using Query Builder)

---

## Configuration Details

### Base URL Configuration
- **Dynamic detection** based on `$_SERVER` variables
- **Localhost handling**: Removes `www.` prefix and forces HTTP
- **Production**: Uses HTTPS with full domain

### Environment
- **Default**: Production mode
- Debug mode: Disabled in production
- Error logging: Enabled (threshold: 1)
- Log files: Daily rotation (`log-YYYY-MM-DD.php`)

### Cache
- Output compression: **Disabled**
- Database cache: **Disabled**
- Query string cache: **Disabled**

---

## File Uploads

### Upload Directory Structure:
```
uploads/
├── {year}/          # Year-based organization (2018-2023)
├── about_us/
├── achievements/
├── blogs/
├── branches/
├── career_enquiry/  # 423 files (PDFs, DOCX)
├── gallery_image/   # 982 images
└── [various categories]/
```

### Upload Categories:
- Career applications
- Gallery images
- Blog images
- Event images
- Banner images
- Team photos
- Programme icons

---

## API & External Integrations

### Payment APIs:
1. **Razorpay** - Primary payment gateway
   - Order creation
   - Payment verification
   - Webhook support

2. **Stripe** - Library included (may not be actively used)

3. **Paystack** - Library included (may not be actively used)

### Email API:
- **SendGrid** - Transactional emails
- SMTP configuration in Email_model

### Lead Sync:
- Remote database sync for leads
- Batch processing (200 leads per sync)
- Transaction-based updates

---

## Performance Considerations

### Current Setup:
- No output compression
- No database caching
- Static assets not minified (some files are)
- Large image files in uploads directory
- Multiple database connections

### Optimization Opportunities:
- Enable Gzip compression
- Implement CDN for static assets
- Image optimization/compression
- Database query optimization
- Implement caching layer
- Minify CSS/JS files

---

## Code Quality & Best Practices

### Strengths:
✅ MVC architecture properly implemented
✅ Separation of concerns (models, views, controllers)
✅ Helper functions for common tasks
✅ URL routing is clean and organized
✅ Database abstraction using Query Builder

### Areas for Improvement:
⚠️ Large controller files (Home.php: 988 lines)
⚠️ Mixed concerns in models
⚠️ Hardcoded values in code
⚠️ No dependency injection
⚠️ Limited error handling
⚠️ No automated testing
⚠️ PHP 5.3.7 compatibility (very outdated)
⚠️ No type hints or return types
⚠️ Inconsistent code formatting

---

## Deployment & Server Requirements

### Server Requirements:
- PHP >= 5.3.7 (but should be upgraded to 7.4+)
- MySQL/MariaDB
- Apache with mod_rewrite enabled
- OpenSSL support
- cURL support

### Apache Configuration:
- `.htaccess` for URL rewriting
- Redirects old WordPress-style URLs
- Clean URLs (no `index.php`)

### Environment Setup:
- Base URL auto-detection
- Database connections per environment
- Logging per environment
- Error reporting per environment

---

## Dependencies

### PHP Libraries:
1. **dompdf** - PDF generation
2. **razorpay-php** - Payment processing
3. **Stripe PHP SDK** - Payment processing (alternative)
4. **Intervention Image** - Image manipulation
5. **PhpSpreadsheet** - Excel file handling

### Frontend Libraries:
1. Bootstrap 5.3.2
2. jQuery
3. SweetAlert2
4. Font Awesome
5. Bootstrap Icons
6. Masonry.js
7. MediaElement.js

---

## Known Issues & Technical Debt

### Critical Issues:
1. **Hardcoded credentials** in source code
2. **Outdated PHP version** requirement
3. **CSRF protection disabled**
4. **No input validation** in some forms
5. **SQL injection risk** (though using Query Builder reduces risk)

### Technical Debt:
1. Legacy WordPress-style code/plugins
2. Mixed coding standards
3. Large monolithic controllers
4. No automated testing
5. Limited documentation
6. Inconsistent error handling
7. No API versioning
8. Hardcoded URLs in views

---

## Maintenance & Monitoring

### Logging:
- Error logs: `application/logs/`
- Daily log rotation
- Log threshold: Error level (1)

### Cron Jobs:
- Lead synchronization: `/cron/push_leads`
- Runs manually or via scheduled task

### Monitoring Needs:
- Application error tracking
- Performance monitoring
- Uptime monitoring
- Payment transaction monitoring
- Email delivery monitoring

---

## Recommendations

### Immediate Actions:
1. **Security**:
   - Move credentials to environment variables
   - Enable CSRF protection
   - Update PHP to 7.4+ or 8.x
   - Enable secure cookies

2. **Code Quality**:
   - Refactor large controllers
   - Add input validation
   - Implement proper error handling
   - Add type hints

3. **Performance**:
   - Enable output compression
   - Optimize images
   - Implement caching
   - Minify assets

### Long-term Improvements:
1. Migrate to CodeIgniter 4 or modern framework
2. Implement REST API
3. Add automated testing
4. Set up CI/CD pipeline
5. Implement monitoring/alerting
6. Add API documentation
7. Refactor to use dependency injection
8. Implement proper logging system

---

## Contact & Support

- **Website**: https://www.kidzoniainternational.in
- **Email**: noreply@kidzonia.co.in
- **Phone**: +91 9100 25 6256

---

## File Statistics

- **Total Controllers**: 3 (main app) + admin controllers
- **Total Models**: 5
- **Total Views**: 61+ frontend views
- **Total Routes**: 40+ custom routes
- **Codebase Size**: ~2,300+ lines in main controller alone
- **Database Tables**: Multiple (main tables include: blogs, events, leads, careers, etc.)

---

*Analysis Date: December 11, 2025*
*CodeIgniter Version: 3.x*
*PHP Requirement: >= 5.3.7*






