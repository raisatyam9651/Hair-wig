# Growig Hair Solution — Site Structure & Architecture

**Business:** Growig Hair Solution  
**Industry:** Local Service (Hair Patch / Wig / Non-Surgical Hair Replacement)  
**Location:** Dwarka, Delhi NCR  
**Analysis Date:** August 2026  
**Template Reference:** Local Service Business (local-service.md)  

---

## Current Site Structure Analysis

Based on review of the website (index.php, sitemap.xml, and observed patterns), Growig currently employs a hybrid structure combining:

1. **Core Service Pages** (Flat structure)
2. **Programmatic Location Pages** (Deep geographic targeting)
3. **Blog Section** (Chronological with categories)
4. **Brand-Specific Pages** (Product/brand focused)
5. **Informational Sections** (FAQ, About, Contact)

### Observed URL Patterns from Sitemap & Navigation

```
/
├── index.php (Home)
├── premium-hair-patch
├── full-hair-wig
├── non-surgical-replacement
├── hair-bonding
├── maintenance-and-styling
├── custom-hairline-design
├── hair-weaving-in-dwarka
├── about
├── contact
├── faq
├── blog/
│   ├── [25 individual posts with date-based slugs]
│   └── category/ ([Buying Guide, Comparison, Maintenance, etc.])
├── [Brand Pages]/
│   ├── bmw-hair-patch
│   ├── mirage-hair-patch
│   ├── australian-hair-patch
│   ├── filament-hair-patch
│   ├── superior-filament-hair-patch
│   ├── monofilament-hair-patch
│   ├── mono-silk-hair-patch
│   ├── french-lace-hair-patch
│   ├── front-lace-hair-patch
│   ├── full-lace-hair-patch
│   └── poly-fuse-hair-patch
├── [Location Pages - Delhi]/
│   ├── dwarka-sector-1
│   ├── dwarka-sector-2
│   ├── ... (43+ total)
├── [Location Pages - Gurugram]/
│   ├── gurgaon-sector-15
│   ├── gurgaon-mg-road
│   ├── ... (30+ total)
└── [Wig Shop Location Pages]/
    ├── wig-shop-dwarka-sector-6
    ├── wig-shop-gurgaon-dlf-phase-1
    ├── ... (20+ total)
```

---

## Recommended Site Architecture

Following the local-service.md template and SEO best practices, here is the recommended hierarchical structure:

```
/
├── Home (index.php)
├── About (/about)
├── Services (/services)
│   ├── Premium Hair Patch (/services/premium-hair-patch)
│   ├── Full Hair Wigs (/services/full-hair-wig)
│   ├── Non-Surgical Replacement (/services/non-surgical-replacement)
│   ├── Hair Bonding (/services/hair-bonding)
│   ├── Maintenance & Styling (/services/maintenance-and-styling)
│   ├── Custom Hairline Design (/services/custom-hairline-design)
│   └── Hair Weaving (/services/hair-weaving)
├── Locations (/locations)
│   ├── Delhi (/locations/delhi)
│   │   ├── Dwarka (/locations/delhi/dwarka)
│   │   │   ├── Sector 1 (/locations/delhi/dwarka/sector-1)
│   │   │   ├── Sector 6 (/locations/delhi/dwarka/sector-6)
│   │   │   ├── Sector 7 (/locations/delhi/dwarka/sector-7)
│   │   │   ├── Sector 12 (/locations/delhi/dwarka/sector-12)
│   │   │   ├── Metro Station Area (/locations/delhi/dwarka/metro-station)
│   │   │   └── Mor / Raja Garden (/locations/delhi/dwarka/mor)
│   │   ├── South Delhi (/locations/delhi/south-delhi)
│   │   │   ├── Lajpat Nagar (/locations/delhi/south-delhi/lajpat-nagar)
│   │   │   ├── Nehru Place (/locations/delhi/south-delhi/nehru-place)
│   │   │   ├── Saket (/locations/delhi/south-delhi/saket)
│   │   │   └── Hauz Khas (/locations/delhi/south-delhi/hauz-khas)
│   │   ├── West Delhi (/locations/delhi/west-delhi)
│   │   │   ├── Janakpuri (/locations/delhi/west-delhi/janakpuri)
│   │   │   ├── Tilak Nagar (/locations/delhi/west-delhi/tilak-nagar)
│   │   │   └── Uttam Nagar (/locations/delhi/west-delhi/uttam-nagar)
│   │   └── Other Areas (...) 
│   ├── Gurugram (/locations/gurugram)
│   │   ├── Sector 15 (/locations/gurugram/sector-15)
│   │   ├── MG Road (/locations/gurugram/mg-road)
│   │   ├── Golf Course Road (/locations/gurugram/golf-course-road)
│   │   ├── DLF Phase 1 (/locations/gurugram/dlf-phase-1)
│   │   ├── DLF Phase 2-5 (/locations/gurugram/dlf-phase-2-5)
│   │   ├── Sohna Road (/locations/gurugram/sohna-road)
│   │   ├── Cyber City (/locations/gurugram/cyber-city)
│   │   └── Manesar (/locations/gurugram/manesar)
│   └── Other NCR (...) 
├── Wig Shop (/wig-shop)
│   ├── Dwarka (/wig-shop/dwarka)
│   │   ├── Sector 6 (/wig-shop/dwarka/sector-6)
│   │   ├── Sector 12 (/wig-shop/dwarka/sector-12)
│   │   └── ...
│   ├── Gurugram (/wig-shop/gurugram)
│   │   ├── DLF Phase 1 (/wig-shop/gurugram/dlf-phase-1)
│   │   └── ...
│   └── Other Locations ...
├── Brands (/brands)
│   ├── BMW (/brands/bmw)
│   ├── Mirage (/brands/mirage)
│   ├── Australian (/brands/australian)
│   ├── Filament (/brands/filament)
│   ├── Superior Filament (/brands/superior-filament)
│   ├── Monofilament (/brands/monofilament)
│   ├── Mono Silk (/brands/mono-silk)
│   ├── French Lace (/brands/french-lace)
│   ├── Front Lace (/brands/front-lace)
│   ├── Full Lace (/brands/full-lace)
│   └── Poly Fuse (/brands/poly-fuse)
├── Blog (/blog)
│   ├── Buying Guide (/blog/buying-guide)
│   ├── Comparison (/blog/comparison)
│   ├── Maintenance (/blog/maintenance)
│   ├── Styling (/blog/styling)
│   ├── Safety (/blog/safety)
│   ├── Lifestyle (/blog/lifestyle)
│   ├── Hair Loss Awareness (/blog/hair-loss-awareness)
│   └── Hindi Content (/blog/hindi) [Future]
├── Reviews (/reviews)
│   ├── Video Testimonials (/reviews/video)
│   ├── Written Testimonials (/reviews/written)
│   └── Case Studies (/reviews/case-studies)
├── Resources (/resources)
│   ├── Guides (/resources/guides)
│   │   ├── Hair Patch Maintenance Guide (/resources/guides/maintenance)
│   │   ├── Buyer's Guide to Hair Patches (/resources/guides/buyers-guide)
│   │   └── Wig Care Guide (/resources/guides/wig-care)
│   ├── Videos (/resources/videos)
│   └── FAQs (/resources/faqs)
├── Contact (/contact)
└── FAQ (/faq)
```

---

## URL Structure Guidelines

### 1. Service Pages
**Pattern:** `/services/[service-name]`
- Use kebab-case, descriptive names
- Keep service names consistent with navigation and content
- Example: `/services/premium-hair-patch` (not `/premium-hair-patch` at root)

### 2. Location Pages  
**Pattern:** `/locations/[city]/[area]/[specific-location]`
- **City Level:** delhi, gurugram, noida, faridabad, ghaziabad
- **Area Level:** Sector numbers, major roads, neighborhoods
- **Specific Level:** Landmarks, metro stations, well-known areas
- **Examples:**
  - `/locations/delhi/dwarka/sector-12`
  - `/locations/delhi/dwarka/metro-station`
  - `/locations/gurugram/sector-15`
  - `/locations/gurugram/mg-road`

### 3. Wig Shop Location Pages
**Pattern:** `/wig-shop/[city]/[area]`
- Separated from general locations for clear intent targeting
- Examples:
  - `/wig-shop/dwarka/sector-6`
  - `/wig-shop/gurugram/dlf-phase-1`

### 4. Brand Pages
**Pattern:** `/brands/[brand-name]`
- Group all brand information for authority building
- Examples:
  - `/brands/bmw`
  - `/brands/mirage`

### 5. Blog Structure
**Pattern:** `/blog/[category]/[post-title]`
- Maintain existing date-based URLs for SEO continuity
- Add category-based structure for new content
- Examples:
  - `/blog/buying-guide/hair-patch-adhesives-explained`
  - `/blog/comparison/human-hair-vs-synthetic-wig`

### 6. Resource Section
**Pattern:** `/resources/[type]/[specific]`
- Centralize downloadable content, guides, videos
- Examples:
  - `/resources/guides/hair-patch-maintenance-guide`
  - `/resources/videos/client-transformation-john-doe`

### 7. Reviews & Testimonials
**Pattern:** `/reviews/[type]`
- Separate from main navigation but accessible
- Examples:
  - `/reviews/video-testimonials`
  - `/reviews/written-testimonials`
  - `/reviews/case-studies`

---

## Internal Linking Strategy

### Hierarchical Flow
```
Homepage → Services → Service Pages → Location Pages (relevant)
Homepage → Locations → City → Area → Specific Location
Homepage → Blog → Category → Individual Post
Homepage → Brands → Specific Brand
Homepage → Reviews → [Type]
Homepage → Resources → [Type] → [Specific Guide/Video]
```

### Contextual Linking Rules
1. **Service Pages** should link to:
   - Relevant location pages (service + location combinations)
   - Related service pages (e.g., Hair Bonding links to Maintenance)
   - Blog posts about that service
   - Brand pages if specific brands are mentioned
   - Reviews/testimonials related to that service

2. **Location Pages** should link to:
   - Homepage
   - Relevant service pages (what's available at this location)
   - Nearby location pages (geographic siloing)
   - Local blog content (if any location-specific blogs exist)
   - Google Business Profile (embed or link)

3. **Blog Posts** should link to:
   - Relevant service pages (when discussing treatments)
   - Related blog posts (content clustering)
   - Location pages (if geographically relevant)
   - Resources (guides, videos)
   - Service pages for conversion

4. **Brand Pages** should link to:
   - Service pages that use that brand
   - Location pages where brand is available
   - Blog posts mentioning the brand
   - Technical specifications/resources

### Silo Structure Examples

**Service Silo: Hair Bonding**
```
/services/hair-bonding
   ↳ /locations/delhi/dwarka/sector-7 (if available there)
   ↳ /locations/gurugram/sector-15 (if available there)
   ↳ /blog/hair-bonding-maintenance-tips
   ↳ /resources/guides/hair-bonding-aftercare
   ↳ /brands/mirage (if using Mirage bonding)
   ↳ /reviews/video/hair-bonding-transformation
   ↳ /faq#hair-bonding-question
```

**Location Silo: Dwarka Sector 12 Metro**
```
/locations/delhi/dwarka/sector-12-metro
   ↳ /services/premium-hair-patch (if offered)
   ↳ /services/full-hair-wig (if offered)
   ↳ /services/hair-bonding (if offered)
   ↳ /locations/delhi/dwarka/sector-11 (nearby)
   ↳ /locations/delhi/dwarka/sector-13 (nearby)
   ↳ /blog/best-hair-patch-studios-in-dwarka-sector-12
   ↳ /resources/guides/dwarka-hair-care-tips
```

### Footer & Header Links
- **Header:** Home, About, Services (dropdown), Locations (dropdown), Blog, Contact
- **Footer:** 
  - Columns: Services, Locations, Brands, Resources, Reviews, Contact
  - Legal: Privacy, Terms
  - Social: Instagram, WhatsApp, Facebook
  - NAP: Name, Address, Phone (critical for local SEO)

---

## Quality Gates Implementation (Per Local Service Template)

### Location Page Content Requirements
To avoid thin content penalties and meet local-service.md guidelines:

| Page Type | Minimum Words | Unique Content % | Required Elements |
|-----------|---------------|------------------|-------------------|
| Primary Location (City/Area) | 600 words | 60%+ unique | Local landmarks, area-specific services, neighborhood info |
| Service Area (Specific Location) | 500 words | 40%+ unique | Specific team members, local testimonials, area landmarks |
| Service Page | 800 words | 100% unique | Detailed service description, process, benefits, FAQs |
| Blog Post | 1000 words | 100% unique | Comprehensive coverage, original research/data |

### What Makes Location Pages Unique (Per Template)
Each location page MUST include:
- [ ] Local landmarks and neighborhoods (e.g., "Near Dwarka Sector 12 Metro Station")
- [ ] Specific services offered at that location (not just generic list)
- [ ] Location-specific team members or experts (if applicable)
- [ ] Local testimonials (with area mentioned: "From a client in Dwarka Sector 7...")
- [ ] Community involvement or local events participated in
- [ ] Local regulations or considerations (if any apply)
- [ ] Area-specific pricing or offers (if vary by location)
- [ ] Nearby landmarks or intersections for context

### Schema Implementation Plan
**Per local-service.md schema recommendations:**

1. **Homepage:** LocalBusiness + Organization
   ```json
   {
     "@context": "https://schema.org",
     "@type": "LocalBusiness",
     "name": "Growig Hair Solution",
     "address": {
       "@type": "PostalAddress",
       "streetAddress": "B-2/22, First Floor, Near Dwarka Sector 12 Metro Station",
       "addressLocality": "Dwarka",
       "addressRegion": "Delhi",
       "postalCode": "110075"
     },
     "telephone": "+91-98186-61911",
     "openingHours": "Mo-Su 10:00-20:00",
     "geo": {
       "@type": "GeoCoordinates",
       "latitude": "28.5852",
       "longitude": "77.0694"
     },
     "areaServed": ["Dwarka", "Delhi NCR", "Gurgaon"],
     "priceRange": "₹5,000-₹25,000",
     "sameAs": [
       "https://instagram.com/growighair",
       "https://www.facebook.com/growighair"
     ]
   }
   ```

2. **Service Pages:** Service + LocalBusiness (for local context)
   ```json
   {
     "@context": "https://schema.org",
     "@type": "Service",
     "name": "Premium Hair Patch",
     "description": "Bespoke, custom-designed hair patches...",
     "offers": {
       "@type": "Offer",
       "priceRange": "₹15,000-₹25,000",
       "availability": "https://schema.org/InStock"
     },
     "areaServed": {
       "@type": "Place",
       "address": {
         "@type": "PostalAddress",
         "addressLocality": "Dwarka",
         "addressRegion": "Delhi"
       }
     }
   }
   ```

3. **Location Pages:** LocalBusiness (with geo)
   ```json
   {
     "@context": "https://schema.org",
     "@type": "LocalBusiness",
     "name": "Growig Hair Solution - Dwarka Sector 12",
     "address": {
       "@type": "PostalAddress",
       "streetAddress": "B-2/22, First Floor, Near Dwarka Sector 12 Metro Station",
       "addressLocality": "Dwarka",
       "addressRegion": "Delhi",
       "postalCode": "110075"
     },
     "telephone": "+91-98186-61911",
     "openingHours": "Mo-Su 10:00-20:00",
     "geo": {
       "@type": "GeoCoordinates",
       "latitude": "28.5852",
       "longitude": "77.0694"
     },
     "serviceArea": ["Dwarka Sector 12", "Sector 11", "Sector 13"],
     "hasOfferCatalog": {
       "@type": "OfferCatalog",
       "name": "Services at Dwarka Sector 12 Location",
       "itemListElement": [
         {
           "@type": "Service",
           "name": "Premium Hair Patch"
         },
         {
           "@type": "Service",
           "name": "Hair Bonding"
         }
       ]
     }
   }
   ```

4. **Reviews:** LocalBusiness with AggregateRating
   ```json
   {
     "@context": "https://schema.org",
     "@type": "LocalBusiness",
     "name": "Growig Hair Solution",
     "aggregateRating": {
       "@type": "AggregateRating",
       "ratingValue": "4.8",
       "reviewCount": "47"
     }
   }
   ```

---

## Migration Plan (If Restructuring)

If implementing the new hierarchical structure from current flat structure:

### Phase 1: Mapping & Preparation
- [ ] Create complete URL mapping: old URL → new URL
- [ ] Prepare redirect rules (301) for all changing URLs
- [ ] Update internal links in templates/content
- [ ] Generate new XML sitemap structure

### Phase 2: Implementation
- [ ] Implement new directory structure on server
- [ ] Move content to new locations preserving content
- [ ] Implement 301 redirects for all changed URLs
- [ ] Update navigation menus to new structure
- [ ] Update schema markup for new URLs

### Phase 3: Validation
- [ ] Test all redirects (old → new) work correctly
- [ ] Verify no 404 errors for important pages
- [ ] Confirm schema validates with Rich Results Test
- [ ] Check Google Search Console for crawl errors
- [ ] Monitor rankings for 2-4 weeks post-migration

### Risk Mitigation for Restructure
- **Keep high-performing URLs as-is** if they already rank well
- **Implement changes gradually** (sections at a time)
- **Maintain both structures temporarily** with canonical tags
- **Prioritize pages with low current rankings** for restructuring
- **Preserve all blog URLs** (date-based) to avoid losing blog SEO value

---

## Current Structure Assessment vs. Recommendations

### What's Working Well
✅ **Service Pages at Root** - Currently ranking, consider keeping for now  
✅ **Blog Structure** - Date-based is acceptable; add category overlay  
✅ **Brand Pages** - Good separation at root level  
✅ **Location Pages** - Exist but need content enhancement  
✅ **FAQ Section** - Well implemented with schema  

### Recommended Adjustments
🟡 **Consider Moving Services to /services/** - Better organization, but weigh ranking risk  
🟢 **Enhance Location Pages** - Add unique content per quality gates (IMMEDIATE PRIORITY)  
🟢 **Create Wig Shop Section** - Separate wig-specific location intent  
🟢 **Add Reviews Section** - Centralize social proof  
🟢 **Add Resources Section** - Host guides, videos, downloadables  
🟢 **Implement Blog Categories** - Improve content discoverability  
🟢 **Add Resources Section** - Centralize guides and downloadables  

### Priority Implementation Order
1. **Location Page Content Enhancement** (Weeks 1-4) - No URL changes needed
2. **Add Wig Shop Section** (Weeks 5-6) - New section, low risk
3. **Add Reviews Section** (Weeks 7-8) - New section, low risk
4. **Add Resources Section** (Weeks 9-10) - New section, low risk
5. **Implement Blog Categories** (Weeks 11-12) - Internal linking improvement
6. **Consider Service Section Move** (Month 4-6) - Higher risk, evaluate based on rankings

---

## Sources
- Local Service Business Template (local-service.md)
- Sitemap.xml analysis (643 URLs)
- Website structure review (index.php, header.php, footer.php)
- Competitive site structure analysis
- Google's Local Services Guidelines
- Schema.org LocalBusiness documentation

---
*Next: Proceed to [CONTENT-CALENDAR.md](CONTENT-CALENDAR.md) for detailed content planning.*