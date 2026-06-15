---
name: location-page-generator
description: >
  Generate SEO-optimized location pages for local businesses. Creates
  district/city-specific landing pages with schema markup, lead forms,
  local content, and FAQ sections. Use when user says "location pages",
  "create location pages", "district pages", "city pages", "local pages",
  "generate location pages", or provides a list of locations to create.
user-invokable: true
argument-hint: "[service-name] [state] [district-list]"
license: MIT
allowed-tools: Read, Grep, Glob, Bash, Write, Edit
metadata:
  author: MiMo
  version: "1.0.0"
  category: seo
---

# Location Page Generator

Generate SEO-optimized location pages following the pattern in `STRATEGY_LOCAL_SEO.md`.

## Directory Structure

Target URL structure for maximum SEO benefit:
`/[specialty]-hospital/[state]/[district-name]/index.php`

**Example:**
`https://example.com/heart-care/haryana/gurgaon/`

## Page Template Structure

Each location page must include these sections:

### 1. SEO Meta Tags
```php
<?php
$page_title = "Best [Service] Hospital in [District] | [Brand Name]";
$meta_description = "Looking for best [service] hospital in [District]? [Brand] offers expert [service] with NABH accreditation. Book appointment now.";
$canonical_url = "[base_url]/[service]/[state]/[district]/";
?>
```

### 2. Schema Markup
- **BreadcrumbList**: Reflecting location hierarchy
- **LocalBusiness** or **MedicalClinic**: With district-specific address
- **FAQPage**: District-specific questions

### 3. Page Sections (in order)

#### Hero Section
- Localized H1: "Best [Service] Hospital in [District]"
- 2-3 specific landmarks/nearby areas
- CTA button for appointment

#### Trust Signals
- NABH Accreditation
- 24/7 Emergency
- Expert Doctors
- Advanced Technology

#### About Section
- Brand introduction with district context
- Why choose this hospital for [service]

#### Services Section
- Grid of related services
- Brief descriptions with icons

#### Doctors Section
- Featured doctors slider
- Specializations and credentials

#### Local SEO Content
- District-specific information
- Landmarks and nearby areas
- How to reach the hospital

#### Priority Appointments & Insurance
- Priority appointment scheduling
- Cashless insurance facilities
- Accepted insurance providers

#### FAQ Section
- 5-8 district-specific questions
- Schema markup for FAQs

#### Internal Links
- Grid linking to other district pages
- Rich anchor text: "Best [Service] Hospital in [District]"

#### Lead Capture Form
- Name, phone, email fields
- Service dropdown
- Preferred appointment time
- Formester or similar integration

#### CTA Section
- Call now button
- WhatsApp button
- Visit hospital button

## Content Guidelines

### Target Keywords
- Primary: "Best [Service] Hospital in [District]"
- Secondary: "[Service] specialist in [District]"
- Long-tail: "[Service] treatment cost in [District]"

### Local Context
- Include 2-3 specific landmarks per district
- Mention nearby areas and connectivity
- Reference local transportation (metro, bus routes)

### Unique Content
- Each page must have unique opening paragraphs
- District-specific FAQ questions
- Local testimonials if available

## Generation Workflow

1. **Input**: Service name, state, list of districts
2. **Create folder structure**: `mkdir -p [service]/[state]/[district]/`
3. **Generate index.php**: Using template with variables
4. **Add schema markup**: Breadcrumb, LocalBusiness, FAQ
5. **Create lead form**: With service-specific dropdown
6. **Internal linking**: Update main service page with district grid
7. **Update sitemap**: Add all new URLs

## Template Variables

```php
$service = "[service-name]";
$state = "[state]";
$district = "[district-name]";
$display_name = "[District Name]";
$brand_name = "[Brand Name]";
$base_url = "[https://example.com]";
$landmarks = ["[Landmark 1]", "[Landmark 2]", "[Landmark 3]"];
```

## Quality Checklist

- [ ] Unique title tag per page
- [ ] Unique meta description per page
- [ ] Breadcrumb schema implemented
- [ ] FAQ schema implemented
- [ ] Lead capture form functional
- [ ] Internal links to other districts
- [ ] Mobile responsive design
- [ ] Page load speed optimized
- [ ] All images have alt tags
- [ ] Schema validation passes

## Common Mistakes to Avoid

❌ Using same content across all districts (duplicate content)
❌ Missing schema markup
❌ Broken internal links
❌ Missing mobile responsiveness
❌ Slow page load times
❌ Missing call-to-action buttons
❌ Generic content without local context

## Example Usage

**User Request:**
"Create location pages for heart-care hospital in Haryana for these districts: Gurgaon, Faridabad, Rohtak, Karnal"

**Agent Action:**
1. Create folder structure: `heart-care/haryana/[district]/`
2. Generate index.php for each district with:
   - Localized content about heart care in that district
   - Specific landmarks (e.g., "near Sector 14" for Gurgaon)
   - District-specific FAQs
   - Lead form with heart care services dropdown
3. Update main heart-care.php with district grid
4. Update sitemap.xml with new URLs
