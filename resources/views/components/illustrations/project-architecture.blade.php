<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="#F9FAFB"/>

    <!-- Building -->
    <g transform="translate(200, 200)">
        <!-- Main building -->
        <rect x="-70" y="-120" width="140" height="120" fill="#667eea"/>
        <rect x="-65" y="-115" width="130" height="110" fill="#7C3AED"/>

        <!-- Windows pattern -->
        <g fill="white" opacity="0.3">
            <rect x="-55" y="-105" width="15" height="20" rx="2"/>
            <rect x="-30" y="-105" width="15" height="20" rx="2"/>
            <rect x="-5" y="-105" width="15" height="20" rx="2"/>
            <rect x="20" y="-105" width="15" height="20" rx="2"/>
            <rect x="45" y="-105" width="15" height="20" rx="2"/>

            <rect x="-55" y="-75" width="15" height="20" rx="2"/>
            <rect x="-30" y="-75" width="15" height="20" rx="2"/>
            <rect x="-5" y="-75" width="15" height="20" rx="2"/>
            <rect x="20" y="-75" width="15" height="20" rx="2"/>
            <rect x="45" y="-75" width="15" height="20" rx="2"/>

            <rect x="-55" y="-45" width="15" height="20" rx="2"/>
            <rect x="-30" y="-45" width="15" height="20" rx="2"/>
            <rect x="-5" y="-45" width="15" height="20" rx="2"/>
            <rect x="20" y="-45" width="15" height="20" rx="2"/>
            <rect x="45" y="-45" width="15" height="20" rx="2"/>
        </g>

        <!-- Entrance -->
        <rect x="-25" y="-20" width="50" height="20" fill="#1F2937"/>
        <circle cx="15" cy="-10" r="2" fill="#FCD34D"/>

        <!-- Roof detail -->
        <polygon points="-75,-120 0,-150 75,-120" fill="#764ba2"/>

        <!-- Side building -->
        <rect x="75" y="-80" width="60" height="80" fill="#9333EA"/>
        <g fill="white" opacity="0.3">
            <rect x="85" y="-70" width="12" height="15" rx="2"/>
            <rect x="105" y="-70" width="12" height="15" rx="2"/>
            <rect x="85" y="-45" width="12" height="15" rx="2"/>
            <rect x="105" y="-45" width="12" height="15" rx="2"/>
        </g>
    </g>

    <!-- Trees -->
    <g transform="translate(80, 230)">
        <rect x="-5" y="-20" width="10" height="20" fill="#78350F"/>
        <circle cx="0" cy="-30" r="18" fill="#10B981"/>
        <circle cx="-8" cy="-25" r="12" fill="#059669"/>
        <circle cx="8" cy="-25" r="12" fill="#059669"/>
    </g>

    <circle cx="320" cy="80" r="20" fill="#667eea" opacity="0.1"/>
</svg>
