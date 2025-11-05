<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Video camera -->
    <g transform="translate(180, 150)">
        <!-- Camera body -->
        <rect x="-60" y="-35" width="120" height="70" rx="8" fill="#1F2937"/>
        <rect x="-55" y="-30" width="110" height="60" rx="5" fill="#374151"/>

        <!-- Lens -->
        <circle cx="80" cy="0" r="35" fill="#4B5563"/>
        <circle cx="80" cy="0" r="28" fill="#6B7280"/>
        <circle cx="80" cy="0" r="20" fill="#374151"/>
        <circle cx="80" cy="0" r="12" fill="#1F2937"/>

        <!-- Lens reflection -->
        <ellipse cx="73" cy="-8" rx="6" ry="10" fill="white" opacity="0.3"/>

        <!-- Top handle -->
        <path d="M -40 -35 L -30 -55 L 30 -55 L 40 -35" stroke="#374151" stroke-width="6" fill="none"/>
        <rect x="-30" y="-60" width="60" height="10" rx="5" fill="#374151"/>

        <!-- Viewfinder -->
        <rect x="-50" y="-45" width="35" height="25" rx="3" fill="#667eea"/>
        <rect x="-45" y="-40" width="25" height="15" rx="2" fill="#4F46E5"/>

        <!-- Record button -->
        <circle cx="-40" cy="20" r="8" fill="#EF4444"/>
        <circle cx="-40" cy="20" r="5" fill="#DC2626" class="animate-pulse"/>

        <!-- Mic -->
        <rect x="20" y="-40" width="15" height="25" rx="7" fill="#6B7280"/>
        <rect x="22" y="-35" width="11" height="15" rx="5" fill="#9CA3AF"/>
    </g>

    <!-- Film strip decoration -->
    <g transform="translate(50, 230)">
        <rect x="0" y="0" width="80" height="50" rx="3" fill="#764ba2" opacity="0.8"/>
        <rect x="5" y="5" width="15" height="40" fill="#9333EA" opacity="0.6"/>
        <rect x="25" y="5" width="15" height="40" fill="#9333EA" opacity="0.6"/>
        <rect x="45" y="5" width="15" height="40" fill="#9333EA" opacity="0.6"/>
        <rect x="65" y="5" width="10" height="40" fill="#9333EA" opacity="0.6"/>
    </g>

    <circle cx="320" cy="80" r="15" fill="#667eea" opacity="0.15"/>
</svg>
