<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>

    <!-- Smartphone -->
    <g transform="translate(200, 150)">
        <!-- Phone Frame -->
        <rect x="-60" y="-100" width="120" height="200" rx="15" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Screen -->
        <rect x="-52" y="-85" width="104" height="170" rx="8" fill="#E5E7EB"/>

        <!-- Status Bar -->
        <rect x="-48" y="-78" width="96" height="8" fill="#667eea" opacity="0.2" rx="2"/>

        <!-- App Content -->
        <!-- Header -->
        <rect x="-48" y="-65" width="96" height="18" fill="#667eea" opacity="0.3" rx="3"/>
        <circle cx="-36" cy="-56" r="5" fill="#667eea" opacity="0.6"/>

        <!-- Content Cards -->
        <rect x="-48" y="-40" width="96" height="35" fill="#764ba2" opacity="0.2" rx="4"/>
        <rect x="-42" y="-33" width="25" height="20" fill="#764ba2" opacity="0.4" rx="2"/>
        <rect x="-12" y="-31" width="45" height="4" fill="#1F2937" opacity="0.4" rx="2"/>
        <rect x="-12" y="-24" width="35" height="3" fill="#6B7280" opacity="0.4" rx="1.5"/>

        <rect x="-48" y="0" width="96" height="35" fill="#667eea" opacity="0.2" rx="4"/>
        <rect x="-42" y="7" width="25" height="20" fill="#667eea" opacity="0.4" rx="2"/>
        <rect x="-12" y="9" width="45" height="4" fill="#1F2937" opacity="0.4" rx="2"/>
        <rect x="-12" y="16" width="35" height="3" fill="#6B7280" opacity="0.4" rx="1.5"/>

        <!-- Bottom Navigation -->
        <g transform="translate(0, 72)">
            <rect x="-48" y="0" width="96" height="12" fill="#667eea" opacity="0.1" rx="2"/>
            <circle cx="-30" cy="6" r="3" fill="#667eea" opacity="0.5"/>
            <circle cx="0" cy="6" r="3" fill="#764ba2" opacity="0.5"/>
            <circle cx="30" cy="6" r="3" fill="#667eea" opacity="0.5"/>
        </g>

        <!-- Notch -->
        <rect x="-20" y="-95" width="40" height="5" rx="3" fill="#1F2937"/>

        <!-- Phone Shadow -->
        <ellipse cx="0" cy="105" rx="50" ry="8" fill="#667eea" opacity="0.15"/>
    </g>

    <!-- Floating Icons -->
    <circle cx="80" cy="80" r="15" fill="#10B981" opacity="0.2"/>
    <path d="M80,73 L77,76 L75,74" stroke="#10B981" stroke-width="2" fill="none"/>

    <circle cx="320" cy="220" r="15" fill="#F59E0B" opacity="0.2"/>
    <circle cx="320" cy="220" r="5" fill="#F59E0B" opacity="0.5"/>

    <circle cx="100" cy="240" r="12" fill="#667eea" opacity="0.1"/>
    <circle cx="320" cy="70" r="18" fill="#764ba2" opacity="0.1"/>
</svg>
