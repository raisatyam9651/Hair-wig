---
name: ppt-report-generator
description: >
  Generate professional PowerPoint presentations for digital performance
  reports, GBP reports, and monthly summaries. Creates branded slides
  with charts, data visualizations, and key metrics. Use when user says
  "create presentation", "generate PPT", "monthly report", "performance
  report", "GBP report", or "digital report".
user-invokable: true
argument-hint: "[client-name] [report-type] [month]"
license: MIT
allowed-tools: Read, Bash, Write, Glob
metadata:
  author: MiMo
  version: "1.0.0"
  category: reporting
---

# PPT Report Generator

Generate professional PowerPoint presentations for digital performance reports.

## Report Types

### 1. Monthly Digital Performance Report
- Executive summary
- Key metrics (traffic, leads, conversions)
- Channel performance (SEO, PPC, Social)
- Top performing content
- Recommendations

### 2. Google Business Profile Report
- GBP insights (views, searches, actions)
- Review performance
- Photo views
- Post performance
- Competitor comparison

### 3. SEO Performance Report
- Organic traffic trends
- Keyword rankings
- Backlink profile
- Technical SEO issues
- Content performance

## Slide Structure

### Slide 1: Title Slide
```
[Client Name] - [Report Type]
[Month] [Year]
Prepared by: [Agency/Your Name]
```

### Slide 2: Executive Summary
- Key highlights (3-5 bullet points)
- Overall performance rating
- Critical actions needed

### Slide 3: Key Metrics Dashboard
- Traffic (sessions, users, pageviews)
- Leads (form submissions, calls, WhatsApp)
- Conversions (conversion rate, goal completions)
- Revenue (if available)

### Slide 4: Traffic Analysis
- Traffic sources breakdown (pie chart)
- Top landing pages (table)
- Device performance (mobile vs desktop)
- Geographic performance

### Slide 5: SEO Performance
- Organic traffic trend (line chart)
- Top keywords (table with rankings)
- Backlinks acquired
- Technical issues resolved

### Slide 6: GBP Performance (if applicable)
- Search views (direct, discovery, branded)
- Customer actions (calls, directions, website)
- Photo views vs competitors
- Review summary

### Slide 7: Content Performance
- Top performing pages
- Blog post metrics
- Content engagement
- Recommendations

### Slide 8: Competitor Analysis
- Ranking comparison
- Content gap analysis
- Backlink comparison
- Opportunities

### Slide 9: Recommendations
- Quick wins (1-2 weeks)
- Medium-term goals (1-3 months)
- Long-term strategy (3-6 months)
- Priority actions

### Slide 10: Next Steps
- Action items with owners
- Timeline
- KPIs to track
- Contact information

## Design Guidelines

### Colors
- Primary: Client's brand color
- Secondary: Complementary color
- Accent: Call-to-action color
- Neutral: Grays for text

### Fonts
- Headings: Bold, 24-32pt
- Subheadings: Semi-bold, 18-22pt
- Body: Regular, 14-16pt
- Captions: Regular, 10-12pt

### Charts
- Use consistent chart types
- Label all axes
- Include data labels
- Add trend lines where appropriate

### Layout
- Maximum 6 bullet points per slide
- Use icons for visual interest
- White space for readability
- Consistent alignment

## Technical Implementation

### Using python-pptx
```python
from pptx import Presentation
from pptx.util import Inches, Pt
from pptx.enum.text import PP_ALIGN
from pptx.dml.color import RGBColor

# Create presentation
prs = Presentation()

# Add title slide
slide_layout = prs.slide_layouts[0]
slide = prs.slides.add_slide(slide_layout)
title = slide.shapes.title
title.text = "Monthly Report"

# Add content slide
slide_layout = prs.slide_layouts[1]
slide = prs.slides.add_slide(slide_layout)
body = slide.shapes.placeholders[1]
tf = body.text_frame
tf.text = "Key Metrics"

# Save
prs.save('report.pptx')
```

### Data Sources
- Google Analytics API
- Google Search Console API
- Google Business Profile API
- SEMrush/Ahrefs API
- Client's CRM data

## Quality Checklist

- [ ] All data accurate and up-to-date
- [ ] Charts properly labeled
- [ ] Consistent branding throughout
- [ ] No spelling/grammar errors
- [ ] PDF version exported
- [ ] File size optimized
- [ ] Client-specific customizations
- [ ] Actionable recommendations

## Common Mistakes to Avoid

❌ Too much text on slides
❌ Inconsistent formatting
❌ Missing data labels on charts
❌ Generic recommendations
❌ Outdated data
❌ Poor image quality
❌ Missing executive summary
❌ No clear call-to-action

## Example Workflow

**User Request:**
"Create May 2026 monthly report for Raj Hospital"

**Agent Action:**
1. Gather data from analytics sources
2. Create presentation with python-pptx
3. Add title slide with client branding
4. Populate metrics dashboard
5. Add traffic and SEO slides
6. Include GBP performance
7. Write recommendations
8. Export as PPTX and PDF
9. Deliver to user

**Output Files:**
- `raj-hospital-may-2026-report.pptx`
- `raj-hospital-may-2026-report.pdf`
