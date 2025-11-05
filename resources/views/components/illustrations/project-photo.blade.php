<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Camera body -->
    <g transform="translate(200, 150)">
        <!-- Main body -->
        <rect x="-80" y="-40" width="160" height="80" rx="8" fill="#1F2937"/>

        <!-- Lens -->
        <circle cx="0" cy="0" r="45" fill="#4B5563"/>
        <circle cx="0" cy="0" r="35" fill="#6B7280"/>
        <circle cx="0" cy="0" r="25" fill="#374151"/>
        <circle cx="0" cy="0" r="15" fill="#1F2937"/>

        <!-- Lens reflection -->
        <ellipse cx="-10" cy="-10" rx="8" ry="12" fill="white" opacity="0.3"/>

        <!-- Top elements -->
        <rect x="-70" y="-55" width="30" height="15" rx="3" fill="#374151"/>
        <rect x="40" y="-55" width="25" height="12" rx="3" fill="#667eea"/>
        <circle cx="55" cy="-49" r="3" fill="#EF4444"/>

        <!-- Viewfinder -->
        <rect x="50" y="-45" width="20" height="15" rx="2" fill="#1F2937"/>

        <!-- Flash -->
        <circle cx="-50" cy="-49" r="8" fill="#FCD34D"/>
        <circle cx="-50" cy="-49" r="5" fill="#FDE047"/>

        <!-- Details -->
        <circle cx="60" cy="0" r="6" fill="#374151"/>
        <circle cx="60" cy="0" r="3" fill="#4B5563"/>
    </g>

    <!-- Decorative elements -->
    <circle cx="50" cy="50" r="20" fill="#667eea" opacity="0.1"/>
    <circle cx="350" cy="250" r="25" fill="#764ba2" opacity="0.1"/>
</svg>
