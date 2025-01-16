@props(['listing'])

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "JobPosting",
    "title": "{{ $listing->title }}",
    "description": "{{ strip_tags($listing->content) }}",
    "datePosted": "{{ $listing->created_at->toISOString() }}",
    "validThrough": "{{ $listing->created_at->addDays(30)->toISOString() }}",
    "hiringOrganization": {
        "@type": "Organization",
        "name": "{{ $listing->company }}",
        "logo": "{{ $listing->logo ? asset('storage/'.$listing->logo) : '' }}"
    },
    "jobLocation": {
        "@type": "Place",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "{{ $listing->location }}"
        }
    },
    "applicationUrl": "{{ route('listings.apply', $listing->slug) }}",
    "skills": [
        @foreach($listing->tags as $tag)
            "{{ $tag->name }}"@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>