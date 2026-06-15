---
name: service-page-rewriter
description: >
  Rewrite service page content with consistent structure and improved
  SEO. Creates engaging, conversion-focused content with proper headings,
  features, FAQs, and calls-to-action. Use when user says "rewrite service
  page", "update service content", "improve service page", "rewrite page
  content", or provides a list of service pages to update.
user-invokable: true
argument-hint: "[page-list or service-name]"
license: MIT
allowed-tools: Read, Grep, Glob, Bash, Write, Edit
metadata:
  author: MiMo
  version: "1.0.0"
  category: content
---

# Service Page Rewriter

Rewrite service page content with consistent, conversion-focused structure.

## Content Structure

Each service page must follow this structure:

### 1. Title Tag & Meta
```php
<?php
$page_title = "Service Name | Brand Name";
$meta_description = "Compelling description with keywords...";
?>
```

### 2. Hero Section
- **H1**: Clear, benefit-focused headline
- **Opening paragraphs**: 2-3 paragraphs explaining the service practically
- **Key benefits**: 3-4 bullet points

### 3. Process Section (H2)
- **H2**: "Our [Service] Process" or "How We [Action]"
- **Steps**: 3-5 H3 subsections with:
  - Step number or name
  - Brief description
  - What to expect

### 4. Features Section (H2)
- **H2**: "Why Choose Our [Service]" or "[Service] Features"
- **List**: 5-8 bullet points with:
  - Bold feature name
  - Brief explanation

### 5. Benefits Section (H2)
- **H2**: "Benefits of [Service]"
- **Grid or list**: 4-6 benefits with:
  - Icon or visual
  - Benefit title
  - Short description

### 6. FAQ Section (H2)
- **H2**: "Frequently Asked Questions"
- **Questions**: 5-8 practical questions
- **Answers**: Detailed, helpful responses
- **Schema**: FAQPage markup

### 7. CTA Section
- **Call to action**: Clear next step
- **Contact options**: Phone, WhatsApp, form
- **Urgency**: Limited time offer or availability

## Writing Guidelines

### Tone
- Conversational and helpful
- Avoid jargon unless necessary
- Focus on customer benefits
- Be specific, not generic

### SEO Keywords
- Primary keyword in H1 and first paragraph
- Secondary keywords in H2s and content
- Long-tail keywords in FAQs
- Natural keyword density (1-2%)

### Content Length
- **Minimum**: 800 words per page
- **Ideal**: 1200-1500 words
- **Maximum**: 2000 words

### Formatting
- Short paragraphs (2-3 sentences)
- Bullet points for lists
- Bold key terms
- Clear headings hierarchy (H1 → H2 → H3)

## Common Mistakes to Avoid

❌ Generic, salesy language
❌ Missing FAQ section
❌ No clear call-to-action
❌ Duplicate content from other pages
❌ Keyword stuffing
❌ Missing schema markup
❌ Poor mobile formatting
❌ Slow loading images

## Example Rewrite

**Before:**
```html
<h1>Our Services</h1>
<p>We offer the best services in town. Contact us today.</p>
```

**After:**
```html
<h1>Professional [Service] You Can Trust</h1>
<p>Looking for reliable [service] in [location]? Our expert team delivers 
[specific benefit] with [unique selling point]. With over [X] years of 
experience, we've helped [number] customers achieve [result].</p>

<h2>Our [Service] Process</h2>
<h3>Step 1: Free Consultation</h3>
<p>We start with a no-obligation consultation to understand your needs...</p>

<h2>Why Choose Us</h2>
<ul>
    <li><strong>Expert Team</strong>: Certified professionals with...</li>
    <li><strong>Quality Materials</strong>: We use only...</li>
</ul>

<h2>Frequently Asked Questions</h2>
<h3>How much does [service] cost?</h3>
<p>Pricing depends on [factors]. Typical costs range from [price range]...</p>
```

## Workflow

1. **Read current page** content
2. **Identify key information**:
   - Service details
   - Pricing (if available)
   - Location-specific info
   - Unique selling points
3. **Rewrite following structure**:
   - Compelling H1
   - Practical opening paragraphs
   - Step-by-step process
   - Features and benefits
   - FAQ section
   - Strong CTA
4. **Add schema markup**:
   - Service schema
   - FAQ schema
   - Breadcrumb schema
5. **Optimize for SEO**:
   - Keyword placement
   - Meta tags
   - Internal linking

## Quality Checklist

- [ ] Compelling H1 with primary keyword
- [ ] Practical opening paragraphs (not salesy)
- [ ] Clear process steps (H3)
- [ ] Features and benefits listed
- [ ] FAQ section with 5+ questions
- [ ] Schema markup implemented
- [ ] Call-to-action prominent
- [ ] Mobile responsive
- [ ] Page load speed optimized
- [ ] Internal links to related pages

## Batch Processing

When updating multiple pages:

1. **Read all pages** first to understand content
2. **Create template** based on best-performing page
3. **Rewrite each page** following consistent structure
4. **Update one by one** (don't change all at once)
5. **Test each page** after update
6. **Monitor performance** for improvements
