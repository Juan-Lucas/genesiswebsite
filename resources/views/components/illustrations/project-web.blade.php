<svg {{ $attributes->merge(['class' => 'w-full h-auto']) }} viewBox="0 0 400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Background -->
    <rect width="400" height="300" fill="transparent"/>

    <!-- Browser Window -->
    <g transform="translate(200, 150)">
        <!-- Window Frame -->
        <rect x="-140" y="-100" width="280" height="200" rx="10" fill="#1F2937" stroke="#667eea" stroke-width="3"/>

        <!-- Browser Header -->
        <rect x="-140" y="-100" width="280" height="25" rx="10" fill="#667eea" opacity="0.3"/>
        <circle cx="-120" cy="-87.5" r="4" fill="#EF4444" opacity="0.6"/>
        <circle cx="-108" cy="-87.5" r="4" fill="#F59E0B" opacity="0.6"/>
        <circle cx="-96" cy="-87.5" r="4" fill="#10B981" opacity="0.6"/>

        <!-- Address Bar -->
        <rect x="-60" y="-92" width="100" height="15" rx="7" fill="#E5E7EB" opacity="0.9"/>
        <circle cx="-50" cy="-84.5" r="3" fill="#667eea" opacity="0.4"/>

        <!-- Screen Content -->
        <rect x="-130" y="-70" width="260" height="160" rx="4" fill="#E5E7EB"/>

        <!-- Hero Section -->
        <rect x="-120" y="-60" width="240" height="40" rx="4" fill="#667eea" opacity="0.2"/>
        <rect x="-110" y="-50" width="80" height="6" rx="3" fill="#1F2937" opacity="0.6"/>
        <rect x="-110" y="-40" width="100" height="4" rx="2" fill="#6B7280" opacity="0.5"/>
        <rect x="-110" y="-32" width="40" height="10" rx="5" fill="#667eea" opacity="0.5"/>

        <!-- Content Grid -->
        <g transform="translate(-80, -10)">
            <rect x="0" y="0" width="50" height="40" rx="3" fill="#764ba2" opacity="0.2"/>
            <rect x="7" y="7" width="15" height="15" rx="2" fill="#764ba2" opacity="0.4"/>
            <rect x="7" y="26" width="36" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
            <rect x="7" y="32" width="28" height="2" rx="1" fill="#6B7280" opacity="0.4"/>
        </g>

        <g transform="translate(-20, -10)">
            <rect x="0" y="0" width="50" height="40" rx="3" fill="#667eea" opacity="0.2"/>
            <rect x="7" y="7" width="15" height="15" rx="2" fill="#667eea" opacity="0.4"/>
            <rect x="7" y="26" width="36" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
            <rect x="7" y="32" width="28" height="2" rx="1" fill="#6B7280" opacity="0.4"/>
        </g>

        <g transform="translate(40, -10)">
            <rect x="0" y="0" width="50" height="40" rx="3" fill="#764ba2" opacity="0.2"/>
            <rect x="7" y="7" width="15" height="15" rx="2" fill="#764ba2" opacity="0.4"/>
            <rect x="7" y="26" width="36" height="3" rx="1.5" fill="#1F2937" opacity="0.4"/>
            <rect x="7" y="32" width="28" height="2" rx="1" fill="#6B7280" opacity="0.4"/>
        </g>

        <!-- Footer -->
        <rect x="-120" y="45" width="240" height="35" rx="4" fill="#667eea" opacity="0.1"/>
        <rect x="-110" y="55" width="60" height="4" rx="2" fill="#1F2937" opacity="0.3"/>
        <rect x="-110" y="62" width="80" height="3" rx="1.5" fill="#6B7280" opacity="0.3"/>

        <!-- Window Shadow -->
        <ellipse cx="0" cy="105" rx="120" ry="10" fill="#667eea" opacity="0.15"/>
    </g>

    <!-- Floating Elements -->
    <circle cx="70" cy="60" r="18" fill="#667eea" opacity="0.15"/>
    <path d="M65,60 L70,65 L80,55" stroke="#667eea" stroke-width="2.5" fill="none" opacity="0.4"/>

    <circle cx="330" cy="240" r="15" fill="#10B981" opacity="0.2"/>
    <circle cx="90" cy="250" r="12" fill="#764ba2" opacity="0.1"/>
    <circle cx="330" cy="50" r="20" fill="#667eea" opacity="0.1"/>
</svg>
