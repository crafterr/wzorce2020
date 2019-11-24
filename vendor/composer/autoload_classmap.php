<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'wzorce\\abstracter\\Animal' => $baseDir . '/abstracter/Animal.php',
    'wzorce\\abstracter\\Dog' => $baseDir . '/abstracter/Dog.php',
    'wzorce\\abstracter\\Lion' => $baseDir . '/abstracter/Lion.php',
    'wzorce\\composite\\renderable\\Button' => $baseDir . '/composite/renderable/Button.php',
    'wzorce\\composite\\renderable\\Form' => $baseDir . '/composite/renderable/Form.php',
    'wzorce\\composite\\renderable\\InputElement' => $baseDir . '/composite/renderable/InputElement.php',
    'wzorce\\composite\\renderable\\Renderable' => $baseDir . '/composite/renderable/Renderable.php',
    'wzorce\\composite\\renderable\\TextArea' => $baseDir . '/composite/renderable/TextArea.php',
    'wzorce\\composite\\renderable\\TextElement' => $baseDir . '/composite/renderable/TextElement.php',
    'wzorce\\composite\\units\\Army' => $baseDir . '/composite/units/Army.php',
    'wzorce\\composite\\units\\unit\\Archer' => $baseDir . '/composite/units/unit/Archer.php',
    'wzorce\\composite\\units\\unit\\LaserCannonUnit' => $baseDir . '/composite/units/unit/LaserCannonUnit.php',
    'wzorce\\composite\\units\\unit\\Maruder' => $baseDir . '/composite/units/unit/Maruder.php',
    'wzorce\\composite\\units\\unit\\Unit' => $baseDir . '/composite/units/unit/Unit.php',
    'wzorce\\composite\\units\\unit\\UnitException' => $baseDir . '/composite/units/unit/UnitException.php',
    'wzorce\\decorator\\booking\\BookingDecorator' => $baseDir . '/decorator/booking/BookingDecorator.php',
    'wzorce\\decorator\\booking\\ExtraBed' => $baseDir . '/decorator/booking/ExtraBed.php',
    'wzorce\\decorator\\booking\\Wifi' => $baseDir . '/decorator/booking/Wifi.php',
    'wzorce\\decorator\\booking\\rooms\\Booking' => $baseDir . '/decorator/booking/rooms/Booking.php',
    'wzorce\\decorator\\booking\\rooms\\DoubleRoomBooking' => $baseDir . '/decorator/booking/rooms/DoubleRoomBooking.php',
    'wzorce\\decorator\\booking\\rooms\\SingleRoomBooking' => $baseDir . '/decorator/booking/rooms/SingleRoomBooking.php',
    'wzorce\\decorator\\component\\Component' => $baseDir . '/decorator/component/Component.php',
    'wzorce\\decorator\\component\\ConcreteComponent' => $baseDir . '/decorator/component/ConcreteComponent.php',
    'wzorce\\decorator\\component\\ConcreteDecoratorComponent' => $baseDir . '/decorator/component/ConcreteDecoratorComponent.php',
    'wzorce\\decorator\\component\\Decorator' => $baseDir . '/decorator/component/Decorator.php',
    'wzorce\\decorator\\simple\\Element' => $baseDir . '/decorator/simple/Element.php',
    'wzorce\\decorator\\simple\\ElementDecorator' => $baseDir . '/decorator/simple/ElementDecorator.php',
    'wzorce\\decorator\\simple\\TextAreaDecorator' => $baseDir . '/decorator/simple/TextAreaDecorator.php',
    'wzorce\\decorator\\simple\\Textarea' => $baseDir . '/decorator/simple/Textarea.php',
    'wzorce\\decorator\\tile\\DiamondDecorator' => $baseDir . '/decorator/tile/DiamondDecorator.php',
    'wzorce\\decorator\\tile\\Forest' => $baseDir . '/decorator/tile/Forest.php',
    'wzorce\\decorator\\tile\\Plains' => $baseDir . '/decorator/tile/Plains.php',
    'wzorce\\decorator\\tile\\PollutionDecorator' => $baseDir . '/decorator/tile/PollutionDecorator.php',
    'wzorce\\decorator\\tile\\Tile' => $baseDir . '/decorator/tile/Tile.php',
    'wzorce\\decorator\\tile\\TileDecorator' => $baseDir . '/decorator/tile/TileDecorator.php',
    'wzorce\\factory\\abstractfactory\\BloggsApptEncoder' => $baseDir . '/factory/abstractfactory/BloggsApptEncoder.php',
    'wzorce\\factory\\abstractfactory\\BloggsCommsManager' => $baseDir . '/factory/abstractfactory/BloggsCommsManager.php',
    'wzorce\\factory\\abstractfactory\\BloggsContactEncoder' => $baseDir . '/factory/abstractfactory/ContactApptEncoder.php',
    'wzorce\\factory\\abstractfactory\\BloggsTtdEncoder' => $baseDir . '/factory/abstractfactory/BloggsTtdEncoder.php',
    'wzorce\\factory\\abstractfactory\\CommsManager' => $baseDir . '/factory/abstractfactory/CommsManager.php',
    'wzorce\\factory\\abstractfactory\\Encoder' => $baseDir . '/factory/abstractfactory/Encoder.php',
    'wzorce\\factory\\abstractfactory\\MegaApptEncoder' => $baseDir . '/factory/abstractfactory/MegaApptEncoder.php',
    'wzorce\\factory\\abstractfactory\\MegaCommsManager' => $baseDir . '/factory/abstractfactory/MegaCommsManager.php',
    'wzorce\\factory\\abstractfactory\\MegaContactEncoder' => $baseDir . '/factory/abstractfactory/MegaContactEncoder.php',
    'wzorce\\factory\\abstractfactory\\MegaTtdEncoder' => $baseDir . '/factory/abstractfactory/MegaTtdEncoder.php',
    'wzorce\\factory\\civilization\\TerrainFactory' => $baseDir . '/factory/civilization/TerrainFactory.php',
    'wzorce\\factory\\civilization\\forest\\EarthForest' => $baseDir . '/factory/civilization/Forest/EarthForest.php',
    'wzorce\\factory\\civilization\\forest\\Forest' => $baseDir . '/factory/civilization/Forest/Forest.php',
    'wzorce\\factory\\civilization\\forest\\MarsForest' => $baseDir . '/factory/civilization/Forest/MarsForest.php',
    'wzorce\\factory\\civilization\\plain\\EarthPlain' => $baseDir . '/factory/civilization/Plain/EarthPlain.php',
    'wzorce\\factory\\civilization\\plain\\MarsPlain' => $baseDir . '/factory/civilization/Plain/MarsPlain.php',
    'wzorce\\factory\\civilization\\plain\\Plain' => $baseDir . '/factory/civilization/Plain/Plain.php',
    'wzorce\\factory\\civilization\\sea\\EarthSea' => $baseDir . '/factory/civilization/Sea/EarthSea.php',
    'wzorce\\factory\\civilization\\sea\\MarsSea' => $baseDir . '/factory/civilization/Sea/MarsSea.php',
    'wzorce\\factory\\civilization\\sea\\Sea' => $baseDir . '/factory/civilization/Sea/Sea.php',
    'wzorce\\factory\\simple\\ApptEncoder' => $baseDir . '/factory/simple/AppEncoder.php',
    'wzorce\\factory\\simple\\BlogApptEncoder' => $baseDir . '/factory/simple/BlogApptEncoder.php',
    'wzorce\\factory\\simple\\BloggsCommsManager' => $baseDir . '/factory/simple/BloggsCommsManager.php',
    'wzorce\\factory\\simple\\CommsManager' => $baseDir . '/factory/simple/CommsManager.php',
    'wzorce\\factory\\simple\\MegaApptEncoder' => $baseDir . '/factory/simple/MegaApptEncoder.php',
    'wzorce\\factory\\simple\\MegaCommsManager' => $baseDir . '/factory/simple/MegaCommsManager.php',
    'wzorce\\fasada\\example1\\Fasada' => $baseDir . '/fasada/example1/Fasada.php',
    'wzorce\\fasada\\example1\\subsystem\\SubSystem1' => $baseDir . '/fasada/example1/subsystem/SubSystem1.php',
    'wzorce\\fasada\\example1\\subsystem\\SubSystem2' => $baseDir . '/fasada/example1/subsystem/SubSystem2.php',
    'wzorce\\fasada\\example1\\subsystem\\SubSystem3' => $baseDir . '/fasada/example1/subsystem/SubSystem3.php',
    'wzorce\\interpreter\\Expression' => $baseDir . '/interpreter/Expression.php',
    'wzorce\\interpreter\\InterpreterContext' => $baseDir . '/interpreter/InterpreterContext.php',
    'wzorce\\interpreter\\Test' => $baseDir . '/interpreter/Test.php',
    'wzorce\\nastyboss\\Employee' => $baseDir . '/nastyboss/Employee.php',
    'wzorce\\nastyboss\\Minion' => $baseDir . '/nastyboss/Minion.php',
    'wzorce\\nastyboss\\NastyBoss' => $baseDir . '/nastyboss/NastyBoss.php',
    'wzorce\\strategy\\output\\ArrayOutput' => $baseDir . '/strategy/output/strategy/ArrayOutput.php',
    'wzorce\\strategy\\output\\Client' => $baseDir . '/strategy/output/Client.php',
    'wzorce\\strategy\\output\\JsonOutput' => $baseDir . '/strategy/output/strategy/JsonOutput.php',
    'wzorce\\strategy\\output\\OutputInterface' => $baseDir . '/strategy/output/strategy/OutputInterface.php',
    'wzroce\\nastyboss\\ClueUp' => $baseDir . '/nastyboss/ClueUp.php',
);
