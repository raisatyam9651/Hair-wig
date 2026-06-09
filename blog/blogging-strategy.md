# blogging strategy for growig hair solution

This document outlines the content creation strategy, SEO guidelines, formatting rules, and writing constraints for all future blogs published on the Growig Hair Solution website.

## 1. Content Constraints & Quality Guidelines

### Simple and Direct Language
- **Easy Words & Sentences**: Write for general readers. Avoid overly clinical, wordy, or complex vocabulary (no "essay-style" words). Keep sentences under 15 words.
- **Short Paragraphs**: Restrict paragraphs to 2-3 sentences. This maximizes readability on mobile devices.

### Structural Requirements
- **Length**: Every article must be **1200+ words** to achieve high search rankings.
- **Question-Answering**: The title's primary question must be answered clearly and directly in the first two paragraphs of the article.
- **Section Headers**: Organize the body copy using logical `<h4>` sub-headings.

### FAQ Standards
- **Patient-Focused FAQs**: Include **7 to 8 FAQs** at the end of every article.
- **Content Focus**: Address practical concerns such as cost, pain, durability, styling options, and daily habits (sleeping, swimming).

## 2. On-Page SEO & Schema Rules

### JSON-LD FAQ Schema
- Every blog post must define its FAQs in the `$blog_posts` data array.
- The `header-code.php` file automatically compiles this array into valid JSON-LD `FAQPage` schema.

### Internal Linking Guidelines
- **Contextual Anchor Text**: Embed **4 to 5 internal links** per post.
- **Relevance**: Anchor text must naturally describe the destination page. Never use generic labels (e.g. "click here" or "read more").
- **Link Mapping**:
  - Premium Hair Patch -> `../premium-hair-patch` (Anchor: `hair patch in Dwarka`, `best hair patch in Dwarka`)
  - Full Hair Wigs -> `../full-hair-wig` (Anchor: `best hair wig in Dwarka`, `hair wig in dwarka`)
  - Non-Surgical Replacement -> `../non-surgical-replacement` (Anchor: `non-surgical hair replacement in Dwarka`)
  - Hair Bonding -> `../hair-bonding` (Anchor: `hair bonding in Dwarka`, `best hair bonding service`)
  - Maintenance & Styling -> `../maintenance-and-styling` (Anchor: `hair patch maintenance in Dwarka`, `hair patch cleaning in Dwarka`)
  - Custom Hairline Design -> `../custom-hairline-design` (Anchor: `custom hairline design in Dwarka`)
  - Blog-to-Blog links (e.g. linking to `hair-patch-vs-transplant.php`).
