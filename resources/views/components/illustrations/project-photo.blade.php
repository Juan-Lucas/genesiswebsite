<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>

    <!-- Camera with Viewfinder -->
    <g transform="translate(200, 150)">
        <!-- Camera Body -->
        <rect x="-80" y="-50" width="160" height="100" rx="8" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Lens -->
        <circle cx="0" cy="0" r="35" fill="#374151" stroke="#667eea" stroke-width="3"/>
        <circle cx="0" cy="0" r="28" fill="#4B5563" opacity="0.8"/>
        <circle cx="0" cy="0" r="20" fill="#667eea" opacity="0.3"/>
        <circle cx="-8" cy="-8" r="6" fill="#E5E7EB" opacity="0.6"/>

        <!-- Viewfinder -->
        <rect x="-20" y="-65" width="40" height="12" rx="3" fill="#374151" stroke="#667eea" stroke-width="2"/>

        <!-- Camera Details -->
        <rect x="50" y="-30" width="15" height="8" rx="2" fill="#667eea" opacity="0.6"/>
        <circle cx="65" cy="-10" r="4" fill="#EF4444" opacity="0.6"/>

        <!-- Strap -->
        <path d="M-80,-30 Q-95,-30 -95,-15 L-95,35 Q-95,50 -80,50" stroke="#764ba2" stroke-width="3" fill="none" opacity="0.5"/>
        <path d="M80,-30 Q95,-30 95,-15 L95,35 Q95,50 80,50" stroke="#764ba2" stroke-width="3" fill="none" opacity="0.5"/>

        <!-- Shadow -->
        <ellipse cx="0" cy="60" rx="70" ry="10" fill="#667eea" opacity="0.15"/>
    </g>

    <!-- Photo Frames -->
    <g transform="translate(80, 80)">
        <rect x="0" y="0" width="50" height="40" rx="3" fill="#E5E7EB" stroke="#667eea" stroke-width="2" opacity="0.8"/>
        <rect x="5" y="5" width="40" height="25" fill="#667eea" opacity="0.3"/>
        <rect x="5" y="32" width="30" height="2" rx="1" fill="#1F2937" opacity="0.4"/>
        <rect x="5" y="36" width="20" height="2" rx="1" fill="#6B7280" opacity="0.4"/>
    </g>

    <g transform="translate(320, 200)">
        <rect x="-25" y="-20" width="50" height="40" rx="3" fill="#E5E7EB" stroke="#764ba2" stroke-width="2" opacity="0.8" transform="rotate(5)"/>
        <rect x="-20" y="-15" width="40" height="25" fill="#764ba2" opacity="0.3"/>
    </g>

    <!-- Floating Icons -->
    <circle cx="100" cy="240" r="15" fill="#F59E0B" opacity="0.2"/>
    <circle cx="330" cy="60" r="18" fill="#667eea" opacity="0.15"/>
    <circle cx="70" cy="60" r="12" fill="#10B981" opacity="0.2"/>
</svg>


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
        <ellipse cx="-10" cy="-10" rx="8" ry="12" fill="#E5E7EB" opacity="0.5"/>

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
