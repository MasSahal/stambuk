<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
       
@-webkit-keyframes flash {
  0% {
    opacity: 1; }
  25% {
    opacity: 0; }
  50% {
    opacity: 1; }
  75% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@keyframes flash {
  0% {
    opacity: 1; }
  25% {
    opacity: 0; }
  50% {
    opacity: 1; }
  75% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  50% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px); }
  80% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  50% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px); }
  80% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  10% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  20% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  30% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  40% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  60% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  70% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  90% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  10% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  20% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  30% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  40% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  60% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  70% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  90% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  100% {
    -webkit-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0); } }

@keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  100% {
    -webkit-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0); } }

@-webkit-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    transform-origin: top center 50%; }
  20% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg); }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); } }

@keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    transform-origin: top center 50%; }
  20% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg); }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); } }

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg); }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg); }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg); }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg); }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg); }
  100% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); } }

@keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg); }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg); }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg); }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg); }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg); }
  100% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); } }

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    transform: skewX(9deg); }
  10% {
    -webkit-transform: skewX(-8deg);
    transform: skewX(-8deg); }
  20% {
    -webkit-transform: skewX(7deg);
    transform: skewX(7deg); }
  30% {
    -webkit-transform: skewX(-6deg);
    transform: skewX(-6deg); }
  40% {
    -webkit-transform: skewX(5deg);
    transform: skewX(5deg); }
  50% {
    -webkit-transform: skewX(-4deg);
    transform: skewX(-4deg); }
  60% {
    -webkit-transform: skewX(3deg);
    transform: skewX(3deg); }
  70% {
    -webkit-transform: skewX(-2deg);
    transform: skewX(-2deg); }
  80% {
    -webkit-transform: skewX(1deg);
    transform: skewX(1deg); }
  90% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); }
  100% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); } }

@keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    transform: skewX(9deg); }
  10% {
    -webkit-transform: skewX(-8deg);
    transform: skewX(-8deg); }
  20% {
    -webkit-transform: skewX(7deg);
    transform: skewX(7deg); }
  30% {
    -webkit-transform: skewX(-6deg);
    transform: skewX(-6deg); }
  40% {
    -webkit-transform: skewX(5deg);
    transform: skewX(5deg); }
  50% {
    -webkit-transform: skewX(-4deg);
    transform: skewX(-4deg); }
  60% {
    -webkit-transform: skewX(3deg);
    transform: skewX(3deg); }
  70% {
    -webkit-transform: skewX(-2deg);
    transform: skewX(-2deg); }
  80% {
    -webkit-transform: skewX(1deg);
    transform: skewX(1deg); }
  90% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); }
  100% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); } }

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); } }

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); } }

@-webkit-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    transform: translateY(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); } }

@keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    transform: translateY(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); } }

@-webkit-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@-webkit-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    transform: translateX(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    transform: translateX(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@-webkit-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05); }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05); }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    transform: translateY(30px); }
  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    transform: translateY(30px); }
  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  80% {
    -webkit-transform: translateY(10px);
    transform: translateY(10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  80% {
    -webkit-transform: translateY(10px);
    transform: translateY(10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    transform: translateX(30px); }
  80% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    transform: translateX(30px); }
  80% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@-webkit-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; } }

@keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; } }

@keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; } }

@keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; } }

@keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0; } }

@keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0; } }

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@-webkit-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@-webkit-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@-webkit-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@-webkit-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@-webkit-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; } }

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; } }

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@-webkit-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0; } }

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40% {
    -webkit-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  100% {
    -webkit-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40% {
    -webkit-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  100% {
    -webkit-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); } }

@keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); } }

@-webkit-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); } }

@keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); } }

/*-------------------------------------------------------------------*/
/* === Boostrap Main SCSS === */
/*!
 * Bootstrap v5.1.3 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root {
  --bs-blue: #5e50f9;
  --bs-indigo: #6610f2;
  --bs-purple: #6a008a;
  --bs-pink: #e91e63;
  --bs-red: #f96868;
  --bs-orange: #f2a654;
  --bs-yellow: #f6e84e;
  --bs-green: #46c35f;
  --bs-teal: #58d8a3;
  --bs-cyan: #57c7d4;
  --bs-white: #ffffff;
  --bs-gray: #434a54;
  --bs-gray-light: #aab2bd;
  --bs-gray-lighter: #e8eff4;
  --bs-gray-lightest: #e6e9ed;
  --bs-gray-dark: #0f1531;
  --bs-black: #000000;
  --bs-gray-100: #f8f9fa;
  --bs-gray-200: #e9ecef;
  --bs-gray-300: #dee2e6;
  --bs-gray-400: #ced4da;
  --bs-gray-500: #adb5bd;
  --bs-gray-600: #6c757d;
  --bs-gray-700: #495057;
  --bs-gray-800: #343a40;
  --bs-gray-900: #212529;
  --bs-primary: #0033c4;
  --bs-secondary: #a0a0a0;
  --bs-success: #00d284;
  --bs-info: #00cff4;
  --bs-warning: #ff5730;
  --bs-danger: #ff0854;
  --bs-light: #f8f9fa;
  --bs-dark: #3e4b5b;
  --bs-primary-rgb: 13, 110, 253;
  --bs-secondary-rgb: 108, 117, 125;
  --bs-success-rgb: 25, 135, 84;
  --bs-info-rgb: 13, 202, 240;
  --bs-warning-rgb: 255, 193, 7;
  --bs-danger-rgb: 220, 53, 69;
  --bs-light-rgb: 248, 249, 250;
  --bs-dark-rgb: 33, 37, 41;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-body-color-rgb: 3, 3, 3;
  --bs-body-bg-rgb: 255, 255, 255;
  --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 1rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.5;
  --bs-body-color: #030303;
  --bs-body-bg: #fff; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth; } }

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

hr {
  margin: 1rem 0;
  color: inherit;
  background-color: currentColor;
  border: 0;
  opacity: 0.25; }

hr:not([size]) {
  height: 1px; }

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2; }

h1, .h1 {
  font-size: calc(1.375rem + 1.5vw); }
  @media (min-width: 1200px) {
    h1, .h1 {
      font-size: 2.5rem; } }

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw); }
  @media (min-width: 1200px) {
    h2, .h2 {
      font-size: 2rem; } }

h3, .h3 {
  font-size: calc(1.3rem + 0.6vw); }
  @media (min-width: 1200px) {
    h3, .h3 {
      font-size: 1.75rem; } }

h4, .h4 {
  font-size: calc(1.275rem + 0.3vw); }
  @media (min-width: 1200px) {
    h4, .h4 {
      font-size: 1.5rem; } }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

p {
  margin-top: 0;
  margin-bottom: 1rem; }

abbr[title],
abbr[data-bs-original-title] {
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul {
  padding-left: 2rem; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

b,
strong {
  font-weight: bolder; }

small, .small {
  font-size: 0.875em; }

mark, .mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #0d6efd;
  text-decoration: underline; }
  a:hover {
    color: #0a58ca; }

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none; }

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
  direction: ltr /* rtl:ignore */;
  unicode-bidi: bidi-override; }

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.875em; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

code {
  font-size: 0.875em;
  color: #d63384;
  word-wrap: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 0.875em;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 1em;
    font-weight: 700; }

figure {
  margin: 0 0 1rem; }

img,
svg {
  vertical-align: middle; }

table {
  caption-side: bottom;
  border-collapse: collapse; }

caption {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  color: #6c757d;
  text-align: left; }

th {
  text-align: inherit;
  text-align: -webkit-match-parent; }

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0; }

label {
  display: inline-block; }

button {
  border-radius: 0; }

button:focus:not(:focus-visible) {
  outline: 0; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
select {
  text-transform: none; }

[role="button"] {
  cursor: pointer; }

select {
  word-wrap: normal; }
  select:disabled {
    opacity: 1; }

[list]::-webkit-calendar-picker-indicator {
  display: none; }

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }
  button:not(:disabled),
  [type="button"]:not(:disabled),
  [type="reset"]:not(:disabled),
  [type="submit"]:not(:disabled) {
    cursor: pointer; }

::-moz-focus-inner {
  padding: 0;
  border-style: none; }

textarea {
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit; }
  @media (min-width: 1200px) {
    legend {
      font-size: 1.5rem; } }
  legend + * {
    clear: left; }

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0; }

::-webkit-inner-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: textfield; }

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-color-swatch-wrapper {
  padding: 0; }

::file-selector-button {
  font: inherit; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

iframe {
  border: 0; }

summary {
  display: list-item;
  cursor: pointer; }

progress {
  vertical-align: baseline; }

[hidden] {
  display: none !important; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: calc(1.625rem + 4.5vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-1 {
      font-size: 5rem; } }

.display-2 {
  font-size: calc(1.575rem + 3.9vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-2 {
      font-size: 4.5rem; } }

.display-3 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-3 {
      font-size: 4rem; } }

.display-4 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-4 {
      font-size: 3.5rem; } }

.display-5 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-5 {
      font-size: 3rem; } }

.display-6 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 300;
  line-height: 1.2; }
  @media (min-width: 1200px) {
    .display-6 {
      font-size: 2.5rem; } }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 0.875em;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }
  .blockquote > :last-child {
    margin-bottom: 0; }

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.875em;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014\00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 0.875em;
  color: #6c757d; }

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  width: 100%;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto; }

@media (min-width: 576px) {
  .container, .container-sm {
    max-width: 540px; } }

@media (min-width: 768px) {
  .container, .container-sm, .container-md {
    max-width: 720px; } }

@media (min-width: 992px) {
  .container, .container-sm, .container-md, .container-lg {
    max-width: 960px; } }

@media (min-width: 1200px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl {
    max-width: 1140px; } }

@media (min-width: 1400px) {
  .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
    max-width: 1320px; } }

.row {
  --bs-gutter-x: 30px;
  --bs-gutter-y: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-.5 * var(--bs-gutter-x));
  margin-left: calc(-.5 * var(--bs-gutter-x)); }
  .row > * {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y); }

.col {
  -webkit-box-flex: 1;
  -ms-flex: 1 0 0%;
  flex: 1 0 0%; }

.row-cols-auto > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto; }

.row-cols-1 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%; }

.row-cols-2 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%; }

.row-cols-3 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333%; }

.row-cols-4 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%; }

.row-cols-5 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 20%; }

.row-cols-6 > * {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66667%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 41.66667%; }

.col-6 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: 100%; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

.g-0,
.gx-0 {
  --bs-gutter-x: 0; }

.g-0,
.gy-0 {
  --bs-gutter-y: 0; }

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem; }

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem; }

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem; }

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem; }

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem; }

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem; }

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem; }

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem; }

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem; }

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem; }

@media (min-width: 576px) {
  .col-sm {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-sm-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-sm-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-sm-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-sm-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-sm-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-sm-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-sm-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0; }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0; }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem; }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem; }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem; }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem; }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem; }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem; }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem; }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem; }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem; }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 768px) {
  .col-md {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-md-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-md-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-md-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-md-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-md-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-md-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-md-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-md-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-md-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0; }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0; }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem; }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem; }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem; }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem; }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem; }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem; }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem; }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem; }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem; }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 992px) {
  .col-lg {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-lg-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-lg-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-lg-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-lg-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-lg-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-lg-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-lg-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-lg-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0; }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0; }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem; }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem; }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem; }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem; }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem; }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem; }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem; }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem; }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem; }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 1200px) {
  .col-xl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-xl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-xl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-xl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-xl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-xl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-xl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-xl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0; }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0; }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem; }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem; }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem; }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem; }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem; }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem; }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem; }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem; }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem; }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem; } }

@media (min-width: 1400px) {
  .col-xxl {
    -webkit-box-flex: 1;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%; }
  .row-cols-xxl-auto > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .row-cols-xxl-1 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .row-cols-xxl-2 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .row-cols-xxl-3 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .row-cols-xxl-4 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .row-cols-xxl-5 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 20%; }
  .row-cols-xxl-6 > * {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xxl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto; }
  .col-xxl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 8.33333%; }
  .col-xxl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 16.66667%; }
  .col-xxl-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 25%; }
  .col-xxl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 33.33333%; }
  .col-xxl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 41.66667%; }
  .col-xxl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 50%; }
  .col-xxl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 58.33333%; }
  .col-xxl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 66.66667%; }
  .col-xxl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 75%; }
  .col-xxl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 83.33333%; }
  .col-xxl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 91.66667%; }
  .col-xxl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: 100%; }
  .offset-xxl-0 {
    margin-left: 0; }
  .offset-xxl-1 {
    margin-left: 8.33333%; }
  .offset-xxl-2 {
    margin-left: 16.66667%; }
  .offset-xxl-3 {
    margin-left: 25%; }
  .offset-xxl-4 {
    margin-left: 33.33333%; }
  .offset-xxl-5 {
    margin-left: 41.66667%; }
  .offset-xxl-6 {
    margin-left: 50%; }
  .offset-xxl-7 {
    margin-left: 58.33333%; }
  .offset-xxl-8 {
    margin-left: 66.66667%; }
  .offset-xxl-9 {
    margin-left: 75%; }
  .offset-xxl-10 {
    margin-left: 83.33333%; }
  .offset-xxl-11 {
    margin-left: 91.66667%; }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0; }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0; }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem; }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem; }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem; }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem; }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem; }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem; }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem; }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem; }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem; }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem; } }

.table {
  --bs-table-bg: transparent;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #212529;
  --bs-table-striped-bg: rgba(0, 0, 0, 0.05);
  --bs-table-active-color: #212529;
  --bs-table-active-bg: rgba(0, 0, 0, 0.1);
  --bs-table-hover-color: #212529;
  --bs-table-hover-bg: #f8f9fb;
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
  vertical-align: top;
  border-color: #e4e9f0; }
  .table > :not(caption) > * > * {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    -webkit-box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); }
  .table > tbody {
    vertical-align: inherit; }
  .table > thead {
    vertical-align: bottom; }
  .table > :not(:first-child) {
    border-top: 2px solid currentColor; }

.caption-top {
  caption-side: top; }

.table-sm > :not(caption) > * > * {
  padding: 0.25rem 0.25rem; }

.table-bordered > :not(caption) > * {
  border-width: 1px 0; }
  .table-bordered > :not(caption) > * > * {
    border-width: 0 1px; }

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0; }

.table-borderless > :not(:first-child) {
  border-top-width: 0; }

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-accent-bg: var(--bs-table-striped-bg);
  color: var(--bs-table-striped-color); }

.table-active {
  --bs-table-accent-bg: var(--bs-table-active-bg);
  color: var(--bs-table-active-color); }

.table-hover > tbody > tr:hover > * {
  --bs-table-accent-bg: var(--bs-table-hover-bg);
  color: var(--bs-table-hover-color); }

.table-primary {
  --bs-table-bg: #cfe2ff;
  --bs-table-striped-bg: #c5d7f2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bacbe6;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfd1ec;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bacbe6; }

.table-secondary {
  --bs-table-bg: #e2e3e5;
  --bs-table-striped-bg: #d7d8da;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #cbccce;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #d1d2d4;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #cbccce; }

.table-success {
  --bs-table-bg: #d1e7dd;
  --bs-table-striped-bg: #c7dbd2;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #bcd0c7;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #c1d6cc;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #bcd0c7; }

.table-info {
  --bs-table-bg: #cff4fc;
  --bs-table-striped-bg: #c5e8ef;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #badce3;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #bfe2e9;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #badce3; }

.table-warning {
  --bs-table-bg: #fff3cd;
  --bs-table-striped-bg: #f2e7c3;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #e6dbb9;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #ece1be;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #e6dbb9; }

.table-danger {
  --bs-table-bg: #f8d7da;
  --bs-table-striped-bg: #eccccf;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfc2c4;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5c7ca;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfc2c4; }

.table-light {
  --bs-table-bg: #f8f9fa;
  --bs-table-striped-bg: #ecedee;
  --bs-table-striped-color: #000;
  --bs-table-active-bg: #dfe0e1;
  --bs-table-active-color: #000;
  --bs-table-hover-bg: #e5e6e7;
  --bs-table-hover-color: #000;
  color: #000;
  border-color: #dfe0e1; }

.table-dark {
  --bs-table-bg: #212529;
  --bs-table-striped-bg: #2c3034;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #373b3e;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #323539;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #373b3e; }

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; } }

.form-label {
  margin-bottom: 0.5rem; }

.col-form-label {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1; }

.col-form-label-lg {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  font-size: 1.25rem; }

.col-form-label-sm {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 0.875rem; }

.form-text {
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #6c757d; }

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  display: block;
  width: 100%;
  padding: 0.94rem 1.375rem;
  font-size: 0.8125rem;
  font-weight: 400;
  line-height: 1;
  color: #212529;
  background-color: color(white);
  background-clip: padding-box;
  border: 1px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: 2px;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
    .tt-query,
    .tt-hint {
      -webkit-transition: none;
      transition: none; } }
  .form-control[type="file"], .select2-container--default .select2-selection--single[type="file"], .select2-container--default .select2-selection--single .select2-search__field[type="file"], .typeahead[type="file"],
  .tt-query[type="file"],
  .tt-hint[type="file"] {
    overflow: hidden; }
    .form-control[type="file"]:not(:disabled):not([readonly]), .select2-container--default .select2-selection--single[type="file"]:not(:disabled):not([readonly]), .select2-container--default .select2-selection--single .select2-search__field[type="file"]:not(:disabled):not([readonly]), .typeahead[type="file"]:not(:disabled):not([readonly]),
    .tt-query[type="file"]:not(:disabled):not([readonly]),
    .tt-hint[type="file"]:not(:disabled):not([readonly]) {
      cursor: pointer; }
  .form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
  .tt-query:focus,
  .tt-hint:focus {
    color: #212529;
    background-color: #fff;
    border-color: #86b7fe;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }
  .form-control::-webkit-date-and-time-value, .select2-container--default .select2-selection--single::-webkit-date-and-time-value, .select2-container--default .select2-selection--single .select2-search__field::-webkit-date-and-time-value, .typeahead::-webkit-date-and-time-value,
  .tt-query::-webkit-date-and-time-value,
  .tt-hint::-webkit-date-and-time-value {
    height: 1em; }
  .form-control::-webkit-input-placeholder, .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .typeahead::-webkit-input-placeholder, .tt-query::-webkit-input-placeholder, .tt-hint::-webkit-input-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control::-moz-placeholder, .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .typeahead::-moz-placeholder, .tt-query::-moz-placeholder, .tt-hint::-moz-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control:-ms-input-placeholder, .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .typeahead:-ms-input-placeholder, .tt-query:-ms-input-placeholder, .tt-hint:-ms-input-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control::-ms-input-placeholder, .select2-container--default .select2-selection--single::-ms-input-placeholder, .select2-container--default .select2-selection--single .select2-search__field::-ms-input-placeholder, .typeahead::-ms-input-placeholder, .tt-query::-ms-input-placeholder, .tt-hint::-ms-input-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
  .tt-query::placeholder,
  .tt-hint::placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control:disabled, .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
  .tt-query:disabled,
  .tt-hint:disabled, .form-control[readonly], .select2-container--default .select2-selection--single[readonly], .select2-container--default .select2-selection--single .select2-search__field[readonly], .typeahead[readonly],
  .tt-query[readonly],
  .tt-hint[readonly] {
    background-color: #e9ecef;
    opacity: 1; }
  .form-control::file-selector-button, .select2-container--default .select2-selection--single::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field::file-selector-button, .typeahead::file-selector-button,
  .tt-query::file-selector-button,
  .tt-hint::file-selector-button {
    padding: 0.94rem 1.375rem;
    margin: -0.94rem -1.375rem;
    -webkit-margin-end: 1.375rem;
    margin-inline-end: 1.375rem;
    color: #212529;
    background-color: #e9ecef;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: 1px;
    border-radius: 0;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-control::file-selector-button, .select2-container--default .select2-selection--single::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field::file-selector-button, .typeahead::file-selector-button,
      .tt-query::file-selector-button,
      .tt-hint::file-selector-button {
        -webkit-transition: none;
        transition: none; } }
  .form-control:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-selection--single:hover:not(:disabled):not([readonly])::file-selector-button, .select2-container--default .select2-selection--single .select2-search__field:hover:not(:disabled):not([readonly])::file-selector-button, .typeahead:hover:not(:disabled):not([readonly])::file-selector-button,
  .tt-query:hover:not(:disabled):not([readonly])::file-selector-button,
  .tt-hint:hover:not(:disabled):not([readonly])::file-selector-button {
    background-color: #dde0e3; }
  .form-control::-webkit-file-upload-button, .select2-container--default .select2-selection--single::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field::-webkit-file-upload-button, .typeahead::-webkit-file-upload-button,
  .tt-query::-webkit-file-upload-button,
  .tt-hint::-webkit-file-upload-button {
    padding: 0.94rem 1.375rem;
    margin: -0.94rem -1.375rem;
    -webkit-margin-end: 1.375rem;
    margin-inline-end: 1.375rem;
    color: #212529;
    background-color: #e9ecef;
    pointer-events: none;
    border-color: inherit;
    border-style: solid;
    border-width: 0;
    border-inline-end-width: 1px;
    border-radius: 0;
    -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-control::-webkit-file-upload-button, .select2-container--default .select2-selection--single::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field::-webkit-file-upload-button, .typeahead::-webkit-file-upload-button,
      .tt-query::-webkit-file-upload-button,
      .tt-hint::-webkit-file-upload-button {
        -webkit-transition: none;
        transition: none; } }
  .form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .select2-container--default .select2-selection--single:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .select2-container--default .select2-selection--single .select2-search__field:hover:not(:disabled):not([readonly])::-webkit-file-upload-button, .typeahead:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
  .tt-query:hover:not(:disabled):not([readonly])::-webkit-file-upload-button,
  .tt-hint:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
    background-color: #dde0e3; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.94rem 0;
  margin-bottom: 0;
  line-height: 1;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  min-height: 2.575rem;
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }
  .form-control-sm::file-selector-button {
    padding: 0.5rem 0.81rem;
    margin: -0.5rem -0.81rem;
    -webkit-margin-end: 0.81rem;
    margin-inline-end: 0.81rem; }
  .form-control-sm::-webkit-file-upload-button {
    padding: 0.5rem 0.81rem;
    margin: -0.5rem -0.81rem;
    -webkit-margin-end: 0.81rem;
    margin-inline-end: 0.81rem; }

.form-control-lg {
  min-height: 3.175rem;
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }
  .form-control-lg::file-selector-button {
    padding: 0.94rem 1.94rem;
    margin: -0.94rem -1.94rem;
    -webkit-margin-end: 1.94rem;
    margin-inline-end: 1.94rem; }
  .form-control-lg::-webkit-file-upload-button {
    padding: 0.94rem 1.94rem;
    margin: -0.94rem -1.94rem;
    -webkit-margin-end: 1.94rem;
    margin-inline-end: 1.94rem; }

textarea.form-control, .select2-container--default textarea.select2-selection--single, .select2-container--default .select2-selection--single textarea.select2-search__field, textarea.typeahead,
textarea.tt-query,
textarea.tt-hint {
  min-height: 2.875rem; }

textarea.form-control-sm {
  min-height: 2.575rem; }

textarea.form-control-lg {
  min-height: 3.175rem; }

.form-control-color {
  width: 3rem;
  height: auto;
  padding: 0.94rem; }
  .form-control-color:not(:disabled):not([readonly]) {
    cursor: pointer; }
  .form-control-color::-moz-color-swatch {
    height: 1em;
    border-radius: 2px; }
  .form-control-color::-webkit-color-swatch {
    height: 1em;
    border-radius: 2px; }

.form-select {
  display: block;
  width: 100%;
  padding: 0.375rem 2.25rem 0.375rem 0.75rem;
  -moz-padding-start: calc(0.75rem - 3px);
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 16px 12px;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  @media (prefers-reduced-motion: reduce) {
    .form-select {
      -webkit-transition: none;
      transition: none; } }
  .form-select:focus {
    border-color: #86b7fe;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }
  .form-select[multiple], .form-select[size]:not([size="1"]) {
    padding-right: 0.75rem;
    background-image: none; }
  .form-select:disabled {
    background-color: #e9ecef; }
  .form-select:-moz-focusring {
    color: transparent;
    text-shadow: 0 0 0 #212529; }

.form-select-sm {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5em;
  margin-bottom: 0.125rem; }
  .form-check .form-check-input {
    float: left;
    margin-left: -1.5em; }

.form-check-input {
  width: 1em;
  height: 1em;
  margin-top: 0.25em;
  vertical-align: top;
  background-color: #fff;
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(0, 0, 0, 0.25);
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-print-color-adjust: exact;
  color-adjust: exact; }
  .form-check-input[type="checkbox"] {
    border-radius: 0.25em; }
  .form-check-input[type="radio"] {
    border-radius: 50%; }
  .form-check-input:active {
    -webkit-filter: brightness(90%);
    filter: brightness(90%); }
  .form-check-input:focus {
    border-color: #86b7fe;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }
  .form-check-input:checked {
    background-color: #0d6efd;
    border-color: #0d6efd; }
    .form-check-input:checked[type="checkbox"] {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e"); }
    .form-check-input:checked[type="radio"] {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='2' fill='%23fff'/%3e%3c/svg%3e"); }
  .form-check-input[type="checkbox"]:indeterminate {
    background-color: #0d6efd;
    border-color: #0d6efd;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e"); }
  .form-check-input:disabled {
    pointer-events: none;
    -webkit-filter: none;
    filter: none;
    opacity: 0.5; }
  .form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
    opacity: 0.5; }

.form-switch {
  padding-left: 2.5em; }
  .form-switch .form-check-input {
    width: 2em;
    margin-left: -2.5em;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
    background-position: left center;
    border-radius: 2em;
    -webkit-transition: background-position 0.15s ease-in-out;
    transition: background-position 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-switch .form-check-input {
        -webkit-transition: none;
        transition: none; } }
    .form-switch .form-check-input:focus {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2386b7fe'/%3e%3c/svg%3e"); }
    .form-switch .form-check-input:checked {
      background-position: right center;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

.form-check-inline {
  display: inline-block;
  margin-right: 1rem; }

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none; }
  .btn-check[disabled] + .btn, .ajax-upload-dragdrop .btn-check[disabled] + .ajax-file-upload, .btn-check:disabled + .btn, .ajax-upload-dragdrop .btn-check:disabled + .ajax-file-upload {
    pointer-events: none;
    -webkit-filter: none;
    filter: none;
    opacity: 0.65; }

.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .form-range:focus {
    outline: 0; }
    .form-range:focus::-webkit-slider-thumb {
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }
    .form-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }
  .form-range::-moz-focus-outer {
    border: 0; }
  .form-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #0d6efd;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .form-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none; } }
    .form-range::-webkit-slider-thumb:active {
      background-color: #b6d4fe; }
  .form-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .form-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #0d6efd;
    border: 0;
    border-radius: 1rem;
    -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .form-range::-moz-range-thumb {
        -moz-transition: none;
        transition: none; } }
    .form-range::-moz-range-thumb:active {
      background-color: #b6d4fe; }
  .form-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .form-range:disabled {
    pointer-events: none; }
    .form-range:disabled::-webkit-slider-thumb {
      background-color: #adb5bd; }
    .form-range:disabled::-moz-range-thumb {
      background-color: #adb5bd; }

.form-floating {
  position: relative; }
  .form-floating > .form-control, .select2-container--default .form-floating > .select2-selection--single, .select2-container--default .select2-selection--single .form-floating > .select2-search__field, .form-floating > .typeahead,
  .form-floating > .tt-query,
  .form-floating > .tt-hint,
  .form-floating > .form-select {
    height: calc(3.5rem + 2px);
    line-height: 1.25; }
  .form-floating > label {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    padding: 1rem 0.75rem;
    pointer-events: none;
    border: 1px solid transparent;
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
    transition: opacity 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
    transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out, -webkit-transform 0.1s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .form-floating > label {
        -webkit-transition: none;
        transition: none; } }
  .form-floating > .form-control, .select2-container--default .form-floating > .select2-selection--single, .select2-container--default .select2-selection--single .form-floating > .select2-search__field, .form-floating > .typeahead,
  .form-floating > .tt-query,
  .form-floating > .tt-hint {
    padding: 1rem 0.75rem; }
    .form-floating > .form-control::-webkit-input-placeholder, .select2-container--default .form-floating > .select2-selection--single::-webkit-input-placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field::-webkit-input-placeholder, .form-floating > .typeahead::-webkit-input-placeholder, .form-floating > .tt-query::-webkit-input-placeholder, .form-floating > .tt-hint::-webkit-input-placeholder {
      color: transparent; }
    .form-floating > .form-control::-moz-placeholder, .select2-container--default .form-floating > .select2-selection--single::-moz-placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field::-moz-placeholder, .form-floating > .typeahead::-moz-placeholder, .form-floating > .tt-query::-moz-placeholder, .form-floating > .tt-hint::-moz-placeholder {
      color: transparent; }
    .form-floating > .form-control:-ms-input-placeholder, .select2-container--default .form-floating > .select2-selection--single:-ms-input-placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-ms-input-placeholder, .form-floating > .typeahead:-ms-input-placeholder, .form-floating > .tt-query:-ms-input-placeholder, .form-floating > .tt-hint:-ms-input-placeholder {
      color: transparent; }
    .form-floating > .form-control::-ms-input-placeholder, .select2-container--default .form-floating > .select2-selection--single::-ms-input-placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field::-ms-input-placeholder, .form-floating > .typeahead::-ms-input-placeholder, .form-floating > .tt-query::-ms-input-placeholder, .form-floating > .tt-hint::-ms-input-placeholder {
      color: transparent; }
    .form-floating > .form-control::placeholder, .select2-container--default .form-floating > .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .form-floating > .select2-search__field::placeholder, .form-floating > .typeahead::placeholder,
    .form-floating > .tt-query::placeholder,
    .form-floating > .tt-hint::placeholder {
      color: transparent; }
    .form-floating > .form-control:not(:-moz-placeholder-shown), .select2-container--default .form-floating > .select2-selection--single:not(:-moz-placeholder-shown), .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:-moz-placeholder-shown), .form-floating > .typeahead:not(:-moz-placeholder-shown), .form-floating > .tt-query:not(:-moz-placeholder-shown), .form-floating > .tt-hint:not(:-moz-placeholder-shown) {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem; }
    .form-floating > .form-control:not(:-ms-input-placeholder), .select2-container--default .form-floating > .select2-selection--single:not(:-ms-input-placeholder), .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:-ms-input-placeholder), .form-floating > .typeahead:not(:-ms-input-placeholder), .form-floating > .tt-query:not(:-ms-input-placeholder), .form-floating > .tt-hint:not(:-ms-input-placeholder) {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem; }
    .form-floating > .form-control:focus, .select2-container--default .form-floating > .select2-selection--single:focus, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:focus, .form-floating > .typeahead:focus,
    .form-floating > .tt-query:focus,
    .form-floating > .tt-hint:focus, .form-floating > .form-control:not(:placeholder-shown), .select2-container--default .form-floating > .select2-selection--single:not(:placeholder-shown), .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:placeholder-shown), .form-floating > .typeahead:not(:placeholder-shown),
    .form-floating > .tt-query:not(:placeholder-shown),
    .form-floating > .tt-hint:not(:placeholder-shown) {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem; }
    .form-floating > .form-control:-webkit-autofill, .select2-container--default .form-floating > .select2-selection--single:-webkit-autofill, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-webkit-autofill, .form-floating > .typeahead:-webkit-autofill,
    .form-floating > .tt-query:-webkit-autofill,
    .form-floating > .tt-hint:-webkit-autofill {
      padding-top: 1.625rem;
      padding-bottom: 0.625rem; }
  .form-floating > .form-select {
    padding-top: 1.625rem;
    padding-bottom: 0.625rem; }
  .form-floating > .form-control:not(:-moz-placeholder-shown) ~ label, .select2-container--default .form-floating > .select2-selection--single:not(:-moz-placeholder-shown) ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:-moz-placeholder-shown) ~ label, .form-floating > .typeahead:not(:-moz-placeholder-shown) ~ label, .form-floating > .tt-query:not(:-moz-placeholder-shown) ~ label, .form-floating > .tt-hint:not(:-moz-placeholder-shown) ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem); }
  .form-floating > .form-control:not(:-ms-input-placeholder) ~ label, .select2-container--default .form-floating > .select2-selection--single:not(:-ms-input-placeholder) ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:-ms-input-placeholder) ~ label, .form-floating > .typeahead:not(:-ms-input-placeholder) ~ label, .form-floating > .tt-query:not(:-ms-input-placeholder) ~ label, .form-floating > .tt-hint:not(:-ms-input-placeholder) ~ label {
    opacity: 0.65;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem); }
  .form-floating > .form-control:focus ~ label, .select2-container--default .form-floating > .select2-selection--single:focus ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:focus ~ label, .form-floating > .typeahead:focus ~ label, .form-floating > .tt-query:focus ~ label, .form-floating > .tt-hint:focus ~ label,
  .form-floating > .form-control:not(:placeholder-shown) ~ label,
  .select2-container--default .form-floating > .select2-selection--single:not(:placeholder-shown) ~ label,
  .select2-container--default .select2-selection--single .form-floating > .select2-search__field:not(:placeholder-shown) ~ label,
  .form-floating > .typeahead:not(:placeholder-shown) ~ label,
  .form-floating > .tt-query:not(:placeholder-shown) ~ label,
  .form-floating > .tt-hint:not(:placeholder-shown) ~ label,
  .form-floating > .form-select ~ label {
    opacity: 0.65;
    -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem); }
  .form-floating > .form-control:-webkit-autofill ~ label, .select2-container--default .form-floating > .select2-selection--single:-webkit-autofill ~ label, .select2-container--default .select2-selection--single .form-floating > .select2-search__field:-webkit-autofill ~ label, .form-floating > .typeahead:-webkit-autofill ~ label, .form-floating > .tt-query:-webkit-autofill ~ label, .form-floating > .tt-hint:-webkit-autofill ~ label {
    opacity: 0.65;
    -webkit-transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem); }

.input-group {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control, .select2-container--default .input-group > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .input-group > .typeahead,
  .input-group > .tt-query,
  .input-group > .tt-hint,
  .input-group > .form-select {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    min-width: 0; }
  .input-group > .form-control:focus, .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .input-group > .typeahead:focus,
  .input-group > .tt-query:focus,
  .input-group > .tt-hint:focus,
  .input-group > .form-select:focus {
    z-index: 3; }
  .input-group .btn, .input-group .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group .ajax-file-upload {
    position: relative;
    z-index: 2; }
    .input-group .btn:focus, .input-group .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .input-group .ajax-file-upload:focus {
      z-index: 3; }

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  font-size: 0.8125rem;
  font-weight: 400;
  line-height: 1;
  color: #212529;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 2px; }

.input-group-lg > .form-control, .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead,
.input-group-lg > .tt-query,
.input-group-lg > .tt-hint,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn,
.ajax-upload-dragdrop .input-group-lg > .ajax-file-upload {
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  border-radius: 0.3rem; }

.input-group-sm > .form-control, .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead,
.input-group-sm > .tt-query,
.input-group-sm > .tt-hint,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn,
.ajax-upload-dragdrop .input-group-sm > .ajax-file-upload {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  border-radius: 0.2rem; }

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 3rem; }

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n + 3) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group.has-validation > :nth-last-child(n + 3):not(.dropdown-toggle):not(.dropdown-menu),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n + 4) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -1px;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #198754; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(25, 135, 84, 0.9);
  border-radius: 0.25rem; }

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-control:valid, .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid,
.was-validated .tt-query:valid,
.was-validated .tt-hint:valid, .form-control.is-valid, .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
.is-valid.tt-query,
.is-valid.tt-hint {
  border-color: #198754;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:valid:focus, .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus,
  .was-validated .tt-query:valid:focus,
  .was-validated .tt-hint:valid:focus, .form-control.is-valid:focus, .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
  .is-valid.tt-query:focus,
  .is-valid.tt-hint:focus {
    border-color: #198754;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25); }

.was-validated textarea.form-control:valid, .was-validated .select2-container--default textarea.select2-selection--single:valid, .select2-container--default .was-validated textarea.select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:valid, .was-validated textarea.typeahead:valid,
.was-validated textarea.tt-query:valid,
.was-validated textarea.tt-hint:valid, textarea.form-control.is-valid, .select2-container--default textarea.is-valid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-valid.select2-search__field, textarea.is-valid.typeahead,
textarea.is-valid.tt-query,
textarea.is-valid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: #198754; }
  .was-validated .form-select:valid:not([multiple]):not([size]), .was-validated .form-select:valid:not([multiple])[size="1"], .form-select.is-valid:not([multiple]):not([size]), .form-select.is-valid:not([multiple])[size="1"] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-select:valid:focus, .form-select.is-valid:focus {
    border-color: #198754;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25); }

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: #198754; }
  .was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
    background-color: #198754; }
  .was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25); }
  .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
    color: #198754; }

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: .5em; }

.was-validated .input-group .form-control:valid, .was-validated .input-group .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .input-group .select2-selection--single:valid, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:valid, .was-validated .input-group .typeahead:valid,
.was-validated .input-group .tt-query:valid,
.was-validated .input-group .tt-hint:valid, .input-group .form-control.is-valid, .input-group .select2-container--default .is-valid.select2-selection--single, .select2-container--default .input-group .is-valid.select2-selection--single, .input-group .select2-container--default .select2-selection--single .is-valid.select2-search__field, .select2-container--default .select2-selection--single .input-group .is-valid.select2-search__field, .input-group .is-valid.typeahead,
.input-group .is-valid.tt-query,
.input-group .is-valid.tt-hint, .was-validated
.input-group .form-select:valid,
.input-group .form-select.is-valid {
  z-index: 1; }
  .was-validated .input-group .form-control:valid:focus, .was-validated .input-group .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .input-group .select2-selection--single:valid:focus, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:valid:focus, .was-validated .input-group .typeahead:valid:focus,
  .was-validated .input-group .tt-query:valid:focus,
  .was-validated .input-group .tt-hint:valid:focus, .input-group .form-control.is-valid:focus, .input-group .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .input-group .is-valid.select2-selection--single:focus, .input-group .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .select2-container--default .select2-selection--single .input-group .is-valid.select2-search__field:focus, .input-group .is-valid.typeahead:focus,
  .input-group .is-valid.tt-query:focus,
  .input-group .is-valid.tt-hint:focus, .was-validated
  .input-group .form-select:valid:focus,
  .input-group .form-select.is-valid:focus {
    z-index: 3; }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875em;
  color: #dc3545; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem; }

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-control:invalid, .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid,
.was-validated .tt-query:invalid,
.was-validated .tt-hint:invalid, .form-control.is-invalid, .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
.is-invalid.tt-query,
.is-invalid.tt-hint {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:invalid:focus, .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus,
  .was-validated .tt-query:invalid:focus,
  .was-validated .tt-hint:invalid:focus, .form-control.is-invalid:focus, .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
  .is-invalid.tt-query:focus,
  .is-invalid.tt-hint:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25); }

.was-validated textarea.form-control:invalid, .was-validated .select2-container--default textarea.select2-selection--single:invalid, .select2-container--default .was-validated textarea.select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:invalid, .was-validated textarea.typeahead:invalid,
.was-validated textarea.tt-query:invalid,
.was-validated textarea.tt-hint:invalid, textarea.form-control.is-invalid, .select2-container--default textarea.is-invalid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-invalid.select2-search__field, textarea.is-invalid.typeahead,
textarea.is-invalid.tt-query,
textarea.is-invalid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: #dc3545; }
  .was-validated .form-select:invalid:not([multiple]):not([size]), .was-validated .form-select:invalid:not([multiple])[size="1"], .form-select.is-invalid:not([multiple]):not([size]), .form-select.is-invalid:not([multiple])[size="1"] {
    padding-right: 4.125rem;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e"), url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
    background-position: right 0.75rem center, center right 2.25rem;
    background-size: 16px 12px, calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25); }

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: #dc3545; }
  .was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
    background-color: #dc3545; }
  .was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25); }
  .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
    color: #dc3545; }

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: .5em; }

.was-validated .input-group .form-control:invalid, .was-validated .input-group .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .input-group .select2-selection--single:invalid, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:invalid, .was-validated .input-group .typeahead:invalid,
.was-validated .input-group .tt-query:invalid,
.was-validated .input-group .tt-hint:invalid, .input-group .form-control.is-invalid, .input-group .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .input-group .is-invalid.select2-selection--single, .input-group .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .select2-container--default .select2-selection--single .input-group .is-invalid.select2-search__field, .input-group .is-invalid.typeahead,
.input-group .is-invalid.tt-query,
.input-group .is-invalid.tt-hint, .was-validated
.input-group .form-select:invalid,
.input-group .form-select.is-invalid {
  z-index: 2; }
  .was-validated .input-group .form-control:invalid:focus, .was-validated .input-group .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .input-group .select2-selection--single:invalid:focus, .was-validated .input-group .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .input-group .select2-search__field:invalid:focus, .was-validated .input-group .typeahead:invalid:focus,
  .was-validated .input-group .tt-query:invalid:focus,
  .was-validated .input-group .tt-hint:invalid:focus, .input-group .form-control.is-invalid:focus, .input-group .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .input-group .is-invalid.select2-selection--single:focus, .input-group .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .select2-container--default .select2-selection--single .input-group .is-invalid.select2-search__field:focus, .input-group .is-invalid.typeahead:focus,
  .input-group .is-invalid.tt-query:focus,
  .input-group .is-invalid.tt-hint:focus, .was-validated
  .input-group .form-select:invalid:focus,
  .input-group .form-select.is-invalid:focus {
    z-index: 3; }

.btn, .ajax-upload-dragdrop .ajax-file-upload {
  display: inline-block;
  font-weight: 400;
  line-height: 1;
  color: #030303;
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 10px 20px;
  font-size: 0.75rem;
  border-radius: 4px;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .btn, .ajax-upload-dragdrop .ajax-file-upload {
      -webkit-transition: none;
      transition: none; } }
  .btn:hover, .ajax-upload-dragdrop .ajax-file-upload:hover {
    color: #030303; }
  .btn-check:focus + .btn, .ajax-upload-dragdrop .btn-check:focus + .ajax-file-upload, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }
  .btn:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled, .btn.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload,
  fieldset:disabled .btn,
  fieldset:disabled .ajax-upload-dragdrop .ajax-file-upload,
  .ajax-upload-dragdrop fieldset:disabled .ajax-file-upload {
    pointer-events: none;
    opacity: 0.65; }

.btn-primary {
  color: #fff;
  background-color: #0033c4;
  border-color: #0033c4; }
  .btn-primary:hover {
    color: #fff;
    background-color: #002ba7;
    border-color: #00299d; }
  .btn-check:focus + .btn-primary, .btn-primary:focus {
    color: #fff;
    background-color: #002ba7;
    border-color: #00299d;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(38, 82, 205, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(38, 82, 205, 0.5); }
  .btn-check:checked + .btn-primary,
  .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active,
  .show > .btn-primary.dropdown-toggle {
    color: #fff;
    background-color: #00299d;
    border-color: #002693; }
    .btn-check:checked + .btn-primary:focus,
    .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(38, 82, 205, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(38, 82, 205, 0.5); }
  .btn-primary:disabled, .btn-primary.disabled {
    color: #fff;
    background-color: #0033c4;
    border-color: #0033c4; }

.btn-secondary {
  color: #000;
  background-color: #a0a0a0;
  border-color: #a0a0a0; }
  .btn-secondary:hover {
    color: #000;
    background-color: #aeaeae;
    border-color: #aaaaaa; }
  .btn-check:focus + .btn-secondary, .btn-secondary:focus {
    color: #000;
    background-color: #aeaeae;
    border-color: #aaaaaa;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(136, 136, 136, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(136, 136, 136, 0.5); }
  .btn-check:checked + .btn-secondary,
  .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active,
  .show > .btn-secondary.dropdown-toggle {
    color: #000;
    background-color: #b3b3b3;
    border-color: #aaaaaa; }
    .btn-check:checked + .btn-secondary:focus,
    .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(136, 136, 136, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(136, 136, 136, 0.5); }
  .btn-secondary:disabled, .btn-secondary.disabled {
    color: #000;
    background-color: #a0a0a0;
    border-color: #a0a0a0; }

.btn-success {
  color: #000;
  background-color: #00d284;
  border-color: #00d284; }
  .btn-success:hover {
    color: #000;
    background-color: #26d996;
    border-color: #1ad790; }
  .btn-check:focus + .btn-success, .btn-success:focus {
    color: #000;
    background-color: #26d996;
    border-color: #1ad790;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 179, 112, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 179, 112, 0.5); }
  .btn-check:checked + .btn-success,
  .btn-check:active + .btn-success, .btn-success:active, .btn-success.active,
  .show > .btn-success.dropdown-toggle {
    color: #000;
    background-color: #33db9d;
    border-color: #1ad790; }
    .btn-check:checked + .btn-success:focus,
    .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 179, 112, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 179, 112, 0.5); }
  .btn-success:disabled, .btn-success.disabled {
    color: #000;
    background-color: #00d284;
    border-color: #00d284; }

.btn-info {
  color: #000;
  background-color: #00cff4;
  border-color: #00cff4; }
  .btn-info:hover {
    color: #000;
    background-color: #26d6f6;
    border-color: #1ad4f5; }
  .btn-check:focus + .btn-info, .btn-info:focus {
    color: #000;
    background-color: #26d6f6;
    border-color: #1ad4f5;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 176, 207, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 176, 207, 0.5); }
  .btn-check:checked + .btn-info,
  .btn-check:active + .btn-info, .btn-info:active, .btn-info.active,
  .show > .btn-info.dropdown-toggle {
    color: #000;
    background-color: #33d9f6;
    border-color: #1ad4f5; }
    .btn-check:checked + .btn-info:focus,
    .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 176, 207, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 176, 207, 0.5); }
  .btn-info:disabled, .btn-info.disabled {
    color: #000;
    background-color: #00cff4;
    border-color: #00cff4; }

.btn-warning {
  color: #000;
  background-color: #ff5730;
  border-color: #ff5730; }
  .btn-warning:hover {
    color: #000;
    background-color: #ff704f;
    border-color: #ff6845; }
  .btn-check:focus + .btn-warning, .btn-warning:focus {
    color: #000;
    background-color: #ff704f;
    border-color: #ff6845;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(217, 74, 41, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(217, 74, 41, 0.5); }
  .btn-check:checked + .btn-warning,
  .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active,
  .show > .btn-warning.dropdown-toggle {
    color: #000;
    background-color: #ff7959;
    border-color: #ff6845; }
    .btn-check:checked + .btn-warning:focus,
    .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(217, 74, 41, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(217, 74, 41, 0.5); }
  .btn-warning:disabled, .btn-warning.disabled {
    color: #000;
    background-color: #ff5730;
    border-color: #ff5730; }

.btn-danger {
  color: #000;
  background-color: #ff0854;
  border-color: #ff0854; }
  .btn-danger:hover {
    color: #000;
    background-color: #ff2d6e;
    border-color: #ff2165; }
  .btn-check:focus + .btn-danger, .btn-danger:focus {
    color: #000;
    background-color: #ff2d6e;
    border-color: #ff2165;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(217, 7, 71, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(217, 7, 71, 0.5); }
  .btn-check:checked + .btn-danger,
  .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active,
  .show > .btn-danger.dropdown-toggle {
    color: #000;
    background-color: #ff3976;
    border-color: #ff2165; }
    .btn-check:checked + .btn-danger:focus,
    .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(217, 7, 71, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(217, 7, 71, 0.5); }
  .btn-danger:disabled, .btn-danger.disabled {
    color: #000;
    background-color: #ff0854;
    border-color: #ff0854; }

.btn-light {
  color: #000;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #000;
    background-color: #f9fafb;
    border-color: #f9fafb; }
  .btn-check:focus + .btn-light, .btn-light:focus {
    color: #000;
    background-color: #f9fafb;
    border-color: #f9fafb;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5); }
  .btn-check:checked + .btn-light,
  .btn-check:active + .btn-light, .btn-light:active, .btn-light.active,
  .show > .btn-light.dropdown-toggle {
    color: #000;
    background-color: #f9fafb;
    border-color: #f9fafb; }
    .btn-check:checked + .btn-light:focus,
    .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(211, 212, 213, 0.5); }
  .btn-light:disabled, .btn-light.disabled {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }

.btn-dark {
  color: #fff;
  background-color: #3e4b5b;
  border-color: #3e4b5b; }
  .btn-dark:hover {
    color: #fff;
    background-color: #35404d;
    border-color: #323c49; }
  .btn-check:focus + .btn-dark, .btn-dark:focus {
    color: #fff;
    background-color: #35404d;
    border-color: #323c49;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(91, 102, 116, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(91, 102, 116, 0.5); }
  .btn-check:checked + .btn-dark,
  .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #323c49;
    border-color: #2f3844; }
    .btn-check:checked + .btn-dark:focus,
    .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(91, 102, 116, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(91, 102, 116, 0.5); }
  .btn-dark:disabled, .btn-dark.disabled {
    color: #fff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }

.btn-outline-primary {
  color: #0033c4;
  border-color: #0033c4; }
  .btn-outline-primary:hover {
    color: #fff;
    background-color: #0033c4;
    border-color: #0033c4; }
  .btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 51, 196, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 51, 196, 0.5); }
  .btn-check:checked + .btn-outline-primary,
  .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
    color: #fff;
    background-color: #0033c4;
    border-color: #0033c4; }
    .btn-check:checked + .btn-outline-primary:focus,
    .btn-check:active + .btn-outline-primary:focus, .btn-outline-primary:active:focus, .btn-outline-primary.active:focus, .btn-outline-primary.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 51, 196, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 51, 196, 0.5); }
  .btn-outline-primary:disabled, .btn-outline-primary.disabled {
    color: #0033c4;
    background-color: transparent; }

.btn-outline-secondary {
  color: #a0a0a0;
  border-color: #a0a0a0; }
  .btn-outline-secondary:hover {
    color: #000;
    background-color: #a0a0a0;
    border-color: #a0a0a0; }
  .btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(160, 160, 160, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(160, 160, 160, 0.5); }
  .btn-check:checked + .btn-outline-secondary,
  .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
    color: #000;
    background-color: #a0a0a0;
    border-color: #a0a0a0; }
    .btn-check:checked + .btn-outline-secondary:focus,
    .btn-check:active + .btn-outline-secondary:focus, .btn-outline-secondary:active:focus, .btn-outline-secondary.active:focus, .btn-outline-secondary.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(160, 160, 160, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(160, 160, 160, 0.5); }
  .btn-outline-secondary:disabled, .btn-outline-secondary.disabled {
    color: #a0a0a0;
    background-color: transparent; }

.btn-outline-success {
  color: #00d284;
  border-color: #00d284; }
  .btn-outline-success:hover {
    color: #000;
    background-color: #00d284;
    border-color: #00d284; }
  .btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 210, 132, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 210, 132, 0.5); }
  .btn-check:checked + .btn-outline-success,
  .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
    color: #000;
    background-color: #00d284;
    border-color: #00d284; }
    .btn-check:checked + .btn-outline-success:focus,
    .btn-check:active + .btn-outline-success:focus, .btn-outline-success:active:focus, .btn-outline-success.active:focus, .btn-outline-success.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 210, 132, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 210, 132, 0.5); }
  .btn-outline-success:disabled, .btn-outline-success.disabled {
    color: #00d284;
    background-color: transparent; }

.btn-outline-info {
  color: #00cff4;
  border-color: #00cff4; }
  .btn-outline-info:hover {
    color: #000;
    background-color: #00cff4;
    border-color: #00cff4; }
  .btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 207, 244, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(0, 207, 244, 0.5); }
  .btn-check:checked + .btn-outline-info,
  .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
    color: #000;
    background-color: #00cff4;
    border-color: #00cff4; }
    .btn-check:checked + .btn-outline-info:focus,
    .btn-check:active + .btn-outline-info:focus, .btn-outline-info:active:focus, .btn-outline-info.active:focus, .btn-outline-info.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(0, 207, 244, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(0, 207, 244, 0.5); }
  .btn-outline-info:disabled, .btn-outline-info.disabled {
    color: #00cff4;
    background-color: transparent; }

.btn-outline-warning {
  color: #ff5730;
  border-color: #ff5730; }
  .btn-outline-warning:hover {
    color: #000;
    background-color: #ff5730;
    border-color: #ff5730; }
  .btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 87, 48, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(255, 87, 48, 0.5); }
  .btn-check:checked + .btn-outline-warning,
  .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
    color: #000;
    background-color: #ff5730;
    border-color: #ff5730; }
    .btn-check:checked + .btn-outline-warning:focus,
    .btn-check:active + .btn-outline-warning:focus, .btn-outline-warning:active:focus, .btn-outline-warning.active:focus, .btn-outline-warning.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 87, 48, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(255, 87, 48, 0.5); }
  .btn-outline-warning:disabled, .btn-outline-warning.disabled {
    color: #ff5730;
    background-color: transparent; }

.btn-outline-danger {
  color: #ff0854;
  border-color: #ff0854; }
  .btn-outline-danger:hover {
    color: #000;
    background-color: #ff0854;
    border-color: #ff0854; }
  .btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 8, 84, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(255, 8, 84, 0.5); }
  .btn-check:checked + .btn-outline-danger,
  .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
    color: #000;
    background-color: #ff0854;
    border-color: #ff0854; }
    .btn-check:checked + .btn-outline-danger:focus,
    .btn-check:active + .btn-outline-danger:focus, .btn-outline-danger:active:focus, .btn-outline-danger.active:focus, .btn-outline-danger.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(255, 8, 84, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(255, 8, 84, 0.5); }
  .btn-outline-danger:disabled, .btn-outline-danger.disabled {
    color: #ff0854;
    background-color: transparent; }

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5); }
  .btn-check:checked + .btn-outline-light,
  .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
    color: #000;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-check:checked + .btn-outline-light:focus,
    .btn-check:active + .btn-outline-light:focus, .btn-outline-light:active:focus, .btn-outline-light.active:focus, .btn-outline-light.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light:disabled, .btn-outline-light.disabled {
    color: #f8f9fa;
    background-color: transparent; }

.btn-outline-dark {
  color: #3e4b5b;
  border-color: #3e4b5b; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
  .btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
    -webkit-box-shadow: 0 0 0 0.25rem rgba(62, 75, 91, 0.5);
    box-shadow: 0 0 0 0.25rem rgba(62, 75, 91, 0.5); }
  .btn-check:checked + .btn-outline-dark,
  .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
    color: #fff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
    .btn-check:checked + .btn-outline-dark:focus,
    .btn-check:active + .btn-outline-dark:focus, .btn-outline-dark:active:focus, .btn-outline-dark.active:focus, .btn-outline-dark.dropdown-toggle.show:focus {
      -webkit-box-shadow: 0 0 0 0.25rem rgba(62, 75, 91, 0.5);
      box-shadow: 0 0 0 0.25rem rgba(62, 75, 91, 0.5); }
  .btn-outline-dark:disabled, .btn-outline-dark.disabled {
    color: #3e4b5b;
    background-color: transparent; }

.btn-link {
  font-weight: 400;
  color: #0d6efd;
  text-decoration: underline; }
  .btn-link:hover {
    color: #0a58ca; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6c757d; }

.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload {
  padding: 1rem 3rem;
  font-size: 0.875rem;
  border-radius: 4px; }

.btn-sm, .btn-group-sm > .btn, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload {
  padding: 6px 7px;
  font-size: 0.875rem;
  border-radius: 4px; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      transition: none; } }
  .collapsing.collapse-horizontal {
    width: 0;
    height: auto;
    -webkit-transition: width 0.35s ease;
    transition: width 0.35s ease; }
    @media (prefers-reduced-motion: reduce) {
      .collapsing.collapse-horizontal {
        -webkit-transition: none;
        transition: none; } }

.dropup,
.dropend,
.dropdown,
.dropstart {
  position: relative; }

.dropdown-toggle {
  white-space: nowrap; }
  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent; }
  .dropdown-toggle:empty::after {
    margin-left: 0; }

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e4e9f0;
  border-radius: 0.25rem; }
  .dropdown-menu[data-bs-popper] {
    top: 100%;
    left: 0;
    margin-top: 0.125rem; }

.dropdown-menu-start {
  --bs-position: start; }
  .dropdown-menu-start[data-bs-popper] {
    right: auto;
    left: 0; }

.dropdown-menu-end {
  --bs-position: end; }
  .dropdown-menu-end[data-bs-popper] {
    right: 0;
    left: auto; }

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start; }
    .dropdown-menu-sm-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-sm-end {
    --bs-position: end; }
    .dropdown-menu-sm-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start; }
    .dropdown-menu-md-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-md-end {
    --bs-position: end; }
    .dropdown-menu-md-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start; }
    .dropdown-menu-lg-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-lg-end {
    --bs-position: end; }
    .dropdown-menu-lg-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start; }
    .dropdown-menu-xl-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-xl-end {
    --bs-position: end; }
    .dropdown-menu-xl-end[data-bs-popper] {
      right: 0;
      left: auto; } }

@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start; }
    .dropdown-menu-xxl-start[data-bs-popper] {
      right: auto;
      left: 0; }
  .dropdown-menu-xxl-end {
    --bs-position: end; }
    .dropdown-menu-xxl-end[data-bs-popper] {
      right: 0;
      left: auto; } }

.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropend .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropend .dropdown-toggle::after {
  vertical-align: 0; }

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropstart .dropdown-toggle::after {
  display: none; }

.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropstart .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropstart .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e4e9f0; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1rem;
  clear: both;
  font-weight: 400;
  color: #030303;
  text-align: inherit;
  text-decoration: none;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #1e2125;
    background-color: #e9ecef; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #0d6efd; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #adb5bd;
    pointer-events: none;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #030303;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1rem;
  color: #030303; }

.dropdown-menu-dark {
  color: #dee2e6;
  background-color: #343a40;
  border-color: rgba(0, 0, 0, 0.15); }
  .dropdown-menu-dark .dropdown-item {
    color: #dee2e6; }
    .dropdown-menu-dark .dropdown-item:hover, .dropdown-menu-dark .dropdown-item:focus {
      color: #fff;
      background-color: rgba(255, 255, 255, 0.15); }
    .dropdown-menu-dark .dropdown-item.active, .dropdown-menu-dark .dropdown-item:active {
      color: #fff;
      background-color: #0d6efd; }
    .dropdown-menu-dark .dropdown-item.disabled, .dropdown-menu-dark .dropdown-item:disabled {
      color: #adb5bd; }
  .dropdown-menu-dark .dropdown-divider {
    border-color: rgba(0, 0, 0, 0.15); }
  .dropdown-menu-dark .dropdown-item-text {
    color: #dee2e6; }
  .dropdown-menu-dark .dropdown-header {
    color: #adb5bd; }

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn, .ajax-upload-dragdrop .btn-group > .ajax-file-upload,
  .btn-group-vertical > .btn,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto; }
  .btn-group > .btn-check:checked + .btn, .ajax-upload-dragdrop .btn-group > .btn-check:checked + .ajax-file-upload,
  .btn-group > .btn-check:focus + .btn,
  .ajax-upload-dragdrop .btn-group > .btn-check:focus + .ajax-file-upload,
  .btn-group > .btn:hover,
  .ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover,
  .btn-group > .btn:focus,
  .ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus,
  .btn-group > .btn:active,
  .ajax-upload-dragdrop .btn-group > .ajax-file-upload:active,
  .btn-group > .btn.active,
  .ajax-upload-dragdrop .btn-group > .active.ajax-file-upload,
  .btn-group-vertical > .btn-check:checked + .btn,
  .ajax-upload-dragdrop .btn-group-vertical > .btn-check:checked + .ajax-file-upload,
  .btn-group-vertical > .btn-check:focus + .btn,
  .ajax-upload-dragdrop .btn-group-vertical > .btn-check:focus + .ajax-file-upload,
  .btn-group-vertical > .btn:hover,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:hover,
  .btn-group-vertical > .btn:focus,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:focus,
  .btn-group-vertical > .btn:active,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:active,
  .btn-group-vertical > .btn.active,
  .ajax-upload-dragdrop .btn-group-vertical > .active.ajax-file-upload {
    z-index: 1; }

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .btn-toolbar .input-group {
    width: auto; }

.btn-group > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:last-child) > .ajax-file-upload {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:nth-child(n + 3), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:nth-child(n + 3),
.btn-group > :not(.btn-check) + .btn,
.ajax-upload-dragdrop .btn-group > :not(.btn-check) + .ajax-file-upload,
.btn-group > .btn-group:not(:first-child) > .btn,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:first-child) > .ajax-file-upload {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 15px;
  padding-left: 15px; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropend .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropstart .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split {
  padding-right: 5.25px;
  padding-left: 5.25px; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }

  .btn-group-vertical > .btn,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
  .btn-group-vertical > .btn-group {
    width: 100%; }
  .btn-group-vertical > .btn:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) {
    margin-top: -1px; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn,
  .ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn ~ .btn, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .btn, .ajax-upload-dragdrop .btn-group-vertical > .btn ~ .ajax-file-upload, .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload ~ .ajax-file-upload,
  .btn-group-vertical > .btn-group:not(:first-child) > .btn,
  .ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
  color: #0d6efd;
  text-decoration: none;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .nav-link {
      -webkit-transition: none;
      transition: none; } }
  .nav-link:hover, .nav-link:focus {
    color: #0a58ca; }
  .nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default; }

.nav-tabs {
  border-bottom: 1px solid #ebedf2; }
  .nav-tabs .nav-link {
    margin-bottom: -1px;
    background: none;
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #ebedf2 #ebedf2 #ebedf2;
      isolation: isolate; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #030303;
    background-color: #ffffff;
    border-color: #ebedf2 #ebedf2 #ffffff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  background: none;
  border: 0;
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #0d6efd; }

.nav-fill > .nav-link,
.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center; }

.nav-justified > .nav-link,
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center; }

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }
  .navbar > .container,
  .navbar > .container-fluid, .navbar > .container-sm, .navbar > .container-md, .navbar > .container-lg, .navbar > .container-xl, .navbar > .container-xxl {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: inherit;
    flex-wrap: inherit;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }

.navbar-brand {
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  text-decoration: none;
  white-space: nowrap; }

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static; }

.navbar-text {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
  -webkit-transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: -webkit-box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out;
  transition: box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .navbar-toggler {
      -webkit-transition: none;
      transition: none; } }
  .navbar-toggler:hover {
    text-decoration: none; }
  .navbar-toggler:focus {
    text-decoration: none;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem;
    box-shadow: 0 0 0 0.25rem; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%; }

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto; }

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-sm .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; }
    .navbar-expand-sm .offcanvas-header {
      display: none; }
    .navbar-expand-sm .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      transition: none;
      -webkit-transform: none;
      transform: none; }
    .navbar-expand-sm .offcanvas-top,
    .navbar-expand-sm .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-sm .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-md .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; }
    .navbar-expand-md .offcanvas-header {
      display: none; }
    .navbar-expand-md .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      transition: none;
      -webkit-transform: none;
      transform: none; }
    .navbar-expand-md .offcanvas-top,
    .navbar-expand-md .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-md .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-lg .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; }
    .navbar-expand-lg .offcanvas-header {
      display: none; }
    .navbar-expand-lg .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      transition: none;
      -webkit-transform: none;
      transform: none; }
    .navbar-expand-lg .offcanvas-top,
    .navbar-expand-lg .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-lg .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-xl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; }
    .navbar-expand-xl .offcanvas-header {
      display: none; }
    .navbar-expand-xl .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      transition: none;
      -webkit-transform: none;
      transform: none; }
    .navbar-expand-xl .offcanvas-top,
    .navbar-expand-xl .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-xl .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

@media (min-width: 1400px) {
  .navbar-expand-xxl {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xxl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xxl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xxl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xxl .navbar-nav-scroll {
      overflow: visible; }
    .navbar-expand-xxl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xxl .navbar-toggler {
      display: none; }
    .navbar-expand-xxl .offcanvas-header {
      display: none; }
    .navbar-expand-xxl .offcanvas {
      position: inherit;
      bottom: 0;
      z-index: 1000;
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      visibility: visible !important;
      background-color: transparent;
      border-right: 0;
      border-left: 0;
      -webkit-transition: none;
      transition: none;
      -webkit-transform: none;
      transform: none; }
    .navbar-expand-xxl .offcanvas-top,
    .navbar-expand-xxl .offcanvas-bottom {
      height: auto;
      border-top: 0;
      border-bottom: 0; }
    .navbar-expand-xxl .offcanvas-body {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex-positive: 0;
      flex-grow: 0;
      padding: 0;
      overflow-y: visible; } }

.navbar-expand {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand .navbar-nav-scroll {
    overflow: visible; }
  .navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }
  .navbar-expand .offcanvas-header {
    display: none; }
  .navbar-expand .offcanvas {
    position: inherit;
    bottom: 0;
    z-index: 1000;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    visibility: visible !important;
    background-color: transparent;
    border-right: 0;
    border-left: 0;
    -webkit-transition: none;
    transition: none;
    -webkit-transform: none;
    transform: none; }
  .navbar-expand .offcanvas-top,
  .navbar-expand .offcanvas-bottom {
    height: auto;
    border-top: 0;
    border-bottom: 0; }
  .navbar-expand .offcanvas-body {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.55); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.55);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.55); }
  .navbar-light .navbar-text a,
  .navbar-light .navbar-text a:hover,
  .navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.55); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.55);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.55%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.55); }
  .navbar-dark .navbar-text a,
  .navbar-dark .navbar-text a:hover,
  .navbar-dark .navbar-text a:focus {
    color: #fff; }

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 3px; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group {
    border-top: inherit;
    border-bottom: inherit; }
    .card > .list-group:first-child {
      border-top-width: 0;
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px); }
    .card > .list-group:last-child {
      border-bottom-width: 0;
      border-bottom-right-radius: calc(0.25rem - 1px);
      border-bottom-left-radius: calc(0.25rem - 1px); }
  .card > .card-header + .list-group,
  .card > .list-group + .card-footer {
    border-top: 0; }

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem 1rem; }

.card-title {
  margin-bottom: 0.5rem; }

.card-subtitle {
  margin-top: -0.25rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link + .card-link {
  margin-left: 1rem; }

.card-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }

.card-footer {
  padding: 0.5rem 1rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.5rem;
  margin-bottom: -0.5rem;
  margin-left: -0.5rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.5rem;
  margin-left: -0.5rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  border-radius: calc(0.25rem - 1px); }

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%; }

.card-img,
.card-img-top {
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img,
.card-img-bottom {
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-group > .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap; }
    .card-group > .card {
      -webkit-box-flex: 1;
      -ms-flex: 1 0 0%;
      flex: 1 0 0%;
      margin-bottom: 0; }
      .card-group > .card + .card {
        margin-left: 0;
        border-left: 0; }
      .card-group > .card:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
          border-top-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
          border-bottom-right-radius: 0; }
      .card-group > .card:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
          border-top-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
          border-bottom-left-radius: 0; } }

.accordion-button {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  width: 100%;
  padding: 1rem 1.25rem;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  background-color: #fff;
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .accordion-button {
      -webkit-transition: none;
      transition: none; } }
  .accordion-button:not(.collapsed) {
    color: #0c63e4;
    background-color: #e7f1ff;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125); }
    .accordion-button:not(.collapsed)::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
      -webkit-transform: rotate(-180deg);
      transform: rotate(-180deg); }
  .accordion-button::after {
    -ms-flex-negative: 0;
    flex-shrink: 0;
    width: 1.25rem;
    height: 1.25rem;
    margin-left: auto;
    content: "";
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-size: 1.25rem;
    -webkit-transition: -webkit-transform 0.2s ease-in-out;
    transition: -webkit-transform 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .accordion-button::after {
        -webkit-transition: none;
        transition: none; } }
  .accordion-button:hover {
    z-index: 2; }
  .accordion-button:focus {
    z-index: 3;
    border-color: #86b7fe;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }

.accordion-header {
  margin-bottom: 0; }

.accordion-item {
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .accordion-item:first-of-type {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .accordion-item:first-of-type .accordion-button {
      border-top-left-radius: calc(0.25rem - 1px);
      border-top-right-radius: calc(0.25rem - 1px); }
  .accordion-item:not(:first-of-type) {
    border-top: 0; }
  .accordion-item:last-of-type {
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
    .accordion-item:last-of-type .accordion-button.collapsed {
      border-bottom-right-radius: calc(0.25rem - 1px);
      border-bottom-left-radius: calc(0.25rem - 1px); }
    .accordion-item:last-of-type .accordion-collapse {
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem; }

.accordion-body {
  padding: 1rem 1.25rem; }

.accordion-flush .accordion-collapse {
  border-width: 0; }

.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }
  .accordion-flush .accordion-item:first-child {
    border-top: 0; }
  .accordion-flush .accordion-item:last-child {
    border-bottom: 0; }
  .accordion-flush .accordion-item .accordion-button {
    border-radius: 0; }

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.56rem 1.13rem;
  margin-bottom: 1rem;
  font-size: 0.875rem;
  list-style: none;
  background-color: transparent; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    float: left;
    padding-right: 0.5rem;
    color: #6c757d;
    content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "/") */; }

.breadcrumb-item.active {
  color: #495057; }

.pagination {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none; }

.page-link {
  position: relative;
  display: block;
  color: #0d6efd;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #dee2e6;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .page-link {
      -webkit-transition: none;
      transition: none; } }
  .page-link:hover {
    z-index: 2;
    color: #0a58ca;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus {
    z-index: 3;
    color: #0a58ca;
    background-color: #e9ecef;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); }

.page-item:not(:first-child) .page-link {
  margin-left: -1px; }

.page-item.active .page-link {
  z-index: 3;
  color: #fff;
  background-color: #0d6efd;
  border-color: #0d6efd; }

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
  border-color: #dee2e6; }

.page-link {
  padding: 0.375rem 0.75rem; }

.page-item:first-child .page-link {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem; }

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem; }

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.35em 0.65em;
  font-size: 0.75em;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem; }
  .badge:empty {
    display: none; }

.btn .badge, .ajax-upload-dragdrop .ajax-file-upload .badge {
  position: relative;
  top: -1px; }

.alert {
  position: relative;
  padding: 1rem 1rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 3rem; }
  .alert-dismissible .btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    padding: 1.25rem 1rem; }

.alert-primary {
  color: #001f76;
  background-color: #ccd6f3;
  border-color: #b3c2ed; }
  .alert-primary .alert-link {
    color: #00195e; }

.alert-secondary {
  color: #606060;
  background-color: #ececec;
  border-color: #e3e3e3; }
  .alert-secondary .alert-link {
    color: #4d4d4d; }

.alert-success {
  color: #005435;
  background-color: #ccf6e6;
  border-color: #b3f2da; }
  .alert-success .alert-link {
    color: #00432a; }

.alert-info {
  color: #005362;
  background-color: #ccf5fd;
  border-color: #b3f1fc; }
  .alert-info .alert-link {
    color: #00424e; }

.alert-warning {
  color: #99341d;
  background-color: #ffddd6;
  border-color: #ffcdc1; }
  .alert-warning .alert-link {
    color: #7a2a17; }

.alert-danger {
  color: #990532;
  background-color: #ffcedd;
  border-color: #ffb5cc; }
  .alert-danger .alert-link {
    color: #7a0428; }

.alert-light {
  color: #636464;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light .alert-link {
    color: #4f5050; }

.alert-dark {
  color: #252d37;
  background-color: #d8dbde;
  border-color: #c5c9ce; }
  .alert-dark .alert-link {
    color: #1e242c; }

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem; } }

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 1rem; } }

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  overflow: hidden;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #0d6efd;
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
  animation: 1s linear infinite progress-bar-stripes; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
      -webkit-animation: none;
      animation: none; } }

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: 0.25rem; }

.list-group-numbered {
  list-style-type: none;
  counter-reset: section; }
  .list-group-numbered > li::before {
    content: counters(section, ".") ". ";
    counter-increment: section; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.5rem 1rem;
  color: #212529;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: inherit;
    border-top-right-radius: inherit; }
  .list-group-item:last-child {
    border-bottom-right-radius: inherit;
    border-bottom-left-radius: inherit; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd; }
  .list-group-item + .list-group-item {
    border-top-width: 0; }
    .list-group-item + .list-group-item.active {
      margin-top: -1px;
      border-top-width: 1px; }

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row; }
  .list-group-horizontal > .list-group-item:first-child {
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0; }
  .list-group-horizontal > .list-group-item:last-child {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0; }
  .list-group-horizontal > .list-group-item.active {
    margin-top: 0; }
  .list-group-horizontal > .list-group-item + .list-group-item {
    border-top-width: 1px;
    border-left-width: 0; }
    .list-group-horizontal > .list-group-item + .list-group-item.active {
      margin-left: -1px;
      border-left-width: 1px; }

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-sm > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-sm > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-sm > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-sm > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-md > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-md > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-md > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-md > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-md > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-lg > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-lg > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-lg > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-lg > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-xl > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-xl > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xl > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xl > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-xxl > .list-group-item:first-child {
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal-xxl > .list-group-item:last-child {
      border-top-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }
    .list-group-horizontal-xxl > .list-group-item.active {
      margin-top: 0; }
    .list-group-horizontal-xxl > .list-group-item + .list-group-item {
      border-top-width: 1px;
      border-left-width: 0; }
      .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
        margin-left: -1px;
        border-left-width: 1px; } }

.list-group-flush {
  border-radius: 0; }
  .list-group-flush > .list-group-item {
    border-width: 0 0 1px; }
    .list-group-flush > .list-group-item:last-child {
      border-bottom-width: 0; }

.list-group-item-primary {
  color: #001f76;
  background-color: #ccd6f3; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #001f76;
    background-color: #b8c1db; }
  .list-group-item-primary.list-group-item-action.active {
    color: #ffffff;
    background-color: #001f76;
    border-color: #001f76; }

.list-group-item-secondary {
  color: #606060;
  background-color: #ececec; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #606060;
    background-color: #d4d4d4; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #ffffff;
    background-color: #606060;
    border-color: #606060; }

.list-group-item-success {
  color: #005435;
  background-color: #ccf6e6; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #005435;
    background-color: #b8ddcf; }
  .list-group-item-success.list-group-item-action.active {
    color: #ffffff;
    background-color: #005435;
    border-color: #005435; }

.list-group-item-info {
  color: #005362;
  background-color: #ccf5fd; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #005362;
    background-color: #b8dde4; }
  .list-group-item-info.list-group-item-action.active {
    color: #ffffff;
    background-color: #005362;
    border-color: #005362; }

.list-group-item-warning {
  color: #99341d;
  background-color: #ffddd6; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #99341d;
    background-color: #e6c7c1; }
  .list-group-item-warning.list-group-item-action.active {
    color: #ffffff;
    background-color: #99341d;
    border-color: #99341d; }

.list-group-item-danger {
  color: #990532;
  background-color: #ffcedd; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #990532;
    background-color: #e6b9c7; }
  .list-group-item-danger.list-group-item-action.active {
    color: #ffffff;
    background-color: #990532;
    border-color: #990532; }

.list-group-item-light {
  color: #636464;
  background-color: #fefefe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #636464;
    background-color: #e5e5e5; }
  .list-group-item-light.list-group-item-action.active {
    color: #ffffff;
    background-color: #636464;
    border-color: #636464; }

.list-group-item-dark {
  color: #252d37;
  background-color: #d8dbde; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #252d37;
    background-color: #c2c5c8; }
  .list-group-item-dark.list-group-item-action.active {
    color: #ffffff;
    background-color: #252d37;
    border-color: #252d37; }

.btn-close {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  width: 1em;
  height: 1em;
  padding: 0.25em 0.25em;
  color: #000;
  background: transparent url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23000'%3e%3cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3e%3c/svg%3e") center/1em auto no-repeat;
  border: 0;
  border-radius: 0.25rem;
  opacity: 0.5; }
  .btn-close:hover {
    color: #000;
    text-decoration: none;
    opacity: 0.75; }
  .btn-close:focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    opacity: 1; }
  .btn-close:disabled, .btn-close.disabled {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    opacity: 0.25; }

.btn-close-white {
  -webkit-filter: invert(1) grayscale(100%) brightness(200%);
  filter: invert(1) grayscale(100%) brightness(200%); }

.toast {
  width: 350px;
  max-width: 100%;
  font-size: 0.875rem;
  pointer-events: auto;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem; }
  .toast.showing {
    opacity: 0; }
  .toast:not(.show) {
    display: none; }

.toast-container {
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none; }
  .toast-container > :not(:last-child) {
    margin-bottom: 0.75rem; }

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.5rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }
  .toast-header .btn-close {
    margin-right: -0.375rem;
    margin-left: 0.75rem; }

.toast-body {
  padding: 0.75rem;
  word-wrap: break-word; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1055;
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.4s ease;
    transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    transition: transform 0.4s ease, -webkit-transform 0.4s ease;
    -webkit-transform: translate(0, -50px);
    transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none; }
  .modal.modal-static .modal-dialog {
    -webkit-transform: scale(1.02);
    transform: scale(1.02); }

.modal-dialog-scrollable {
  height: calc(100% - 20px); }
  .modal-dialog-scrollable .modal-content {
    max-height: 100%;
    overflow: hidden; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 20px); }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #f8f9fb;
  background-clip: padding-box;
  border: 1px solid #e4e9f0;
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100vw;
  height: 100vh;
  background-color: #000000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #e4e9f0;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .modal-header .btn-close {
    padding: 12.5px 13px;
    margin: -12.5px -13px -12.5px auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 0.937rem; }

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-negative: 0;
  flex-shrink: 0;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 0.687rem;
  border-top: 1px solid #e4e9f0;
  border-bottom-right-radius: calc(0.3rem - 1px);
  border-bottom-left-radius: calc(0.3rem - 1px); }
  .modal-footer > * {
    margin: 0.25rem; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 30px auto; }
  .modal-dialog-scrollable {
    height: calc(100% - 60px); }
  .modal-dialog-centered {
    min-height: calc(100% - 60px); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 90%; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } }

.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0; }
  .modal-fullscreen .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0; }
  .modal-fullscreen .modal-header {
    border-radius: 0; }
  .modal-fullscreen .modal-body {
    overflow-y: auto; }
  .modal-fullscreen .modal-footer {
    border-radius: 0; }

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-sm-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-sm-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-sm-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-sm-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-md-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-md-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-md-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-md-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-lg-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-lg-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-lg-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-lg-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-xl-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-xl-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-xl-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-xl-down .modal-footer {
      border-radius: 0; } }

@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0; }
    .modal-fullscreen-xxl-down .modal-content {
      height: 100%;
      border: 0;
      border-radius: 0; }
    .modal-fullscreen-xxl-down .modal-header {
      border-radius: 0; }
    .modal-fullscreen-xxl-down .modal-body {
      overflow-y: auto; }
    .modal-fullscreen-xxl-down .modal-footer {
      border-radius: 0; } }

.tooltip {
  position: absolute;
  z-index: 1080;
  display: block;
  margin: 0;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .tooltip-arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .tooltip-arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[data-popper-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow {
    bottom: 0; }
    .bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="top"] .tooltip-arrow::before {
      top: -1px;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-end, .bs-tooltip-auto[data-popper-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="right"] .tooltip-arrow::before {
      right: -1px;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[data-popper-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow {
    top: 0; }
    .bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="bottom"] .tooltip-arrow::before {
      bottom: -1px;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-start, .bs-tooltip-auto[data-popper-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^="left"] .tooltip-arrow::before {
      left: -1px;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.4rem 0.75rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0 /* rtl:ignore */;
  z-index: 1070;
  display: block;
  max-width: 276px;
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .popover-arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem; }
    .popover .popover-arrow::before, .popover .popover-arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow {
  bottom: calc(-0.5rem - 1px); }
  .bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::before {
    bottom: 0;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="top"] > .popover-arrow::after {
    bottom: 1px;
    border-width: 0.5rem 0.5rem 0;
    border-top-color: #fff; }

.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow {
  left: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem; }
  .bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::before {
    left: 0;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="right"] > .popover-arrow::after {
    left: 1px;
    border-width: 0.5rem 0.5rem 0.5rem 0;
    border-right-color: #fff; }

.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow {
  top: calc(-0.5rem - 1px); }
  .bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::before {
    top: 0;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="bottom"] > .popover-arrow::after {
    top: 1px;
    border-width: 0 0.5rem 0.5rem 0.5rem;
    border-bottom-color: #fff; }

.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f0f0f0; }

.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow {
  right: calc(-0.5rem - 1px);
  width: 0.5rem;
  height: 1rem; }
  .bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::before {
    right: 0;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: rgba(0, 0, 0, 0.25); }
  .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^="left"] > .popover-arrow::after {
    right: 1px;
    border-width: 0.5rem 0 0.5rem 0.5rem;
    border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 1rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f0f0f0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 1rem 1rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }
  .carousel-inner::after {
    display: block;
    clear: both;
    content: ""; }

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-item {
      -webkit-transition: none;
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

/* rtl:begin:ignore */
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  -webkit-transform: translateX(100%);
  transform: translateX(100%); }

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%); }

/* rtl:end:ignore */
.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1; }

.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  -webkit-transition: opacity 0s 0.6s;
  transition: opacity 0s 0.6s; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-start,
    .carousel-fade .active.carousel-item-end {
      -webkit-transition: none;
      transition: none; } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
      -webkit-transition: none;
      transition: none; } }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%; }

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators [data-bs-target] {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    padding: 0;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    -webkit-transition: opacity 0.6s ease;
    transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators [data-bs-target] {
        -webkit-transition: none;
        transition: none; } }
  .carousel-indicators .active {
    opacity: 1; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center; }

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
  filter: invert(1) grayscale(100); }

.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000; }

.carousel-dark .carousel-caption {
  color: #000; }

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
    transform: rotate(360deg) /* rtl:ignore */; } }

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
    transform: rotate(360deg) /* rtl:ignore */; } }

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: 0.75s linear infinite spinner-border;
  animation: 0.75s linear infinite spinner-border; }

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em; }

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: -0.125em;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: 0.75s linear infinite spinner-grow;
  animation: 0.75s linear infinite spinner-grow; }

.spinner-grow-sm {
  width: 1rem;
  height: 1rem; }

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    -webkit-animation-duration: 1.5s;
    animation-duration: 1.5s; } }

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: 1045;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  max-width: 100%;
  visibility: hidden;
  background-color: #fff;
  background-clip: padding-box;
  outline: 0;
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
  transition: -webkit-transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .offcanvas {
      -webkit-transition: none;
      transition: none; } }

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .offcanvas-backdrop.fade {
    opacity: 0; }
  .offcanvas-backdrop.show {
    opacity: 0.5; }

.offcanvas-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem; }
  .offcanvas-header .btn-close {
    padding: 0.5rem 0.5rem;
    margin-top: -0.5rem;
    margin-right: -0.5rem;
    margin-bottom: -0.5rem; }

.offcanvas-title {
  margin-bottom: 0;
  line-height: 1.5; }

.offcanvas-body {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  padding: 1rem 1rem;
  overflow-y: auto; }

.offcanvas-start {
  top: 0;
  left: 0;
  width: 400px;
  border-right: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%); }

.offcanvas-end {
  top: 0;
  right: 0;
  width: 400px;
  border-left: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateX(100%);
  transform: translateX(100%); }

.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%); }

.offcanvas-bottom {
  right: 0;
  left: 0;
  height: 30vh;
  max-height: 100%;
  border-top: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(100%);
  transform: translateY(100%); }

.offcanvas.show {
  -webkit-transform: none;
  transform: none; }

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentColor;
  opacity: 0.5; }
  .placeholder.btn::before, .ajax-upload-dragdrop .placeholder.ajax-file-upload::before {
    display: inline-block;
    content: ""; }

.placeholder-xs {
  min-height: .6em; }

.placeholder-sm {
  min-height: .8em; }

.placeholder-lg {
  min-height: 1.2em; }

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
  animation: placeholder-glow 2s ease-in-out infinite; }

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2; } }

@keyframes placeholder-glow {
  50% {
    opacity: 0.2; } }

.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000000 55%, rgba(0, 0, 0, 0.8) 75%, #000000 95%);
  mask-image: linear-gradient(130deg, #000000 55%, rgba(0, 0, 0, 0.8) 75%, #000000 95%);
  -webkit-mask-size: 200% 100%;
  mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
  animation: placeholder-wave 2s linear infinite; }

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%; } }

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%; } }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.link-primary {
  color: #0033c4; }
  .link-primary:hover, .link-primary:focus {
    color: #00299d; }

.link-secondary {
  color: #a0a0a0; }
  .link-secondary:hover, .link-secondary:focus {
    color: #b3b3b3; }

.link-success {
  color: #00d284; }
  .link-success:hover, .link-success:focus {
    color: #33db9d; }

.link-info {
  color: #00cff4; }
  .link-info:hover, .link-info:focus {
    color: #33d9f6; }

.link-warning {
  color: #ff5730; }
  .link-warning:hover, .link-warning:focus {
    color: #ff7959; }

.link-danger {
  color: #ff0854; }
  .link-danger:hover, .link-danger:focus {
    color: #ff3976; }

.link-light {
  color: #f8f9fa; }
  .link-light:hover, .link-light:focus {
    color: #f9fafb; }

.link-dark {
  color: #3e4b5b; }
  .link-dark:hover, .link-dark:focus {
    color: #323c49; }

.ratio {
  position: relative;
  width: 100%; }
  .ratio::before {
    display: block;
    padding-top: var(--bs-aspect-ratio);
    content: ""; }
  .ratio > * {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }

.ratio-1x1 {
  --bs-aspect-ratio: 100%; }

.ratio-4x3 {
  --bs-aspect-ratio: calc(3 / 4 * 100%); }

.ratio-16x9 {
  --bs-aspect-ratio: calc(9 / 16 * 100%); }

.ratio-21x9 {
  --bs-aspect-ratio: calc(9 / 21 * 100%); }

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020; }

@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020; } }

.hstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-item-align: stretch;
  align-self: stretch; }

.vstack {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-item-align: stretch;
  align-self: stretch; }

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important; }

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: ""; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.vr {
  display: inline-block;
  -ms-flex-item-align: stretch;
  align-self: stretch;
  width: 1px;
  min-height: 1em;
  background-color: currentColor;
  opacity: 0.25; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.float-start {
  float: left !important; }

.float-end {
  float: right !important; }

.float-none {
  float: none !important; }

.opacity-0 {
  opacity: 0 !important; }

.opacity-25 {
  opacity: 0.25 !important; }

.opacity-50 {
  opacity: 0.5 !important; }

.opacity-75 {
  opacity: 0.75 !important; }

.opacity-100 {
  opacity: 1 !important; }

.overflow-auto {
  overflow: auto !important; }

.overflow-hidden {
  overflow: hidden !important; }

.overflow-visible {
  overflow: visible !important; }

.overflow-scroll {
  overflow: scroll !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-grid {
  display: grid !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex, .page-header, .loader-demo-box, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

.d-none {
  display: none !important; }

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: sticky !important; }

.top-0 {
  top: 0 !important; }

.top-50 {
  top: 50% !important; }

.top-100 {
  top: 100% !important; }

.bottom-0 {
  bottom: 0 !important; }

.bottom-50 {
  bottom: 50% !important; }

.bottom-100 {
  bottom: 100% !important; }

.start-0 {
  left: 0 !important; }

.start-50 {
  left: 50% !important; }

.start-100 {
  left: 100% !important; }

.end-0 {
  right: 0 !important; }

.end-50 {
  right: 50% !important; }

.end-100 {
  right: 100% !important; }

.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
  transform: translate(-50%, -50%) !important; }

.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
  transform: translateX(-50%) !important; }

.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
  transform: translateY(-50%) !important; }

.border, .loader-demo-box {
  border: 1px solid #e4e9f0 !important; }

.border-0 {
  border: 0 !important; }

.border-top {
  border-top: 1px solid #e4e9f0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-end {
  border-right: 1px solid #e4e9f0 !important; }

.border-end-0 {
  border-right: 0 !important; }

.border-bottom {
  border-bottom: 1px solid #e4e9f0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-start {
  border-left: 1px solid #e4e9f0 !important; }

.border-start-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #0033c4 !important; }

.border-secondary, .loader-demo-box {
  border-color: #a0a0a0 !important; }

.border-success {
  border-color: #00d284 !important; }

.border-info {
  border-color: #00cff4 !important; }

.border-warning {
  border-color: #ff5730 !important; }

.border-danger {
  border-color: #ff0854 !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #3e4b5b !important; }

.border-white {
  border-color: #ffffff !important; }

.border-1 {
  border-width: 1px !important; }

.border-2 {
  border-width: 2px !important; }

.border-3 {
  border-width: 3px !important; }

.border-4 {
  border-width: 4px !important; }

.border-5 {
  border-width: 5px !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.vw-100 {
  width: 100vw !important; }

.min-vw-100 {
  min-width: 100vw !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mh-100 {
  max-height: 100% !important; }

.vh-100 {
  height: 100vh !important; }

.min-vh-100 {
  min-height: 100vh !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important; }

.flex-row {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.gap-0 {
  gap: 0 !important; }

.gap-1 {
  gap: 0.25rem !important; }

.gap-2 {
  gap: 0.5rem !important; }

.gap-3 {
  gap: 1rem !important; }

.gap-4 {
  gap: 1.5rem !important; }

.gap-5 {
  gap: 3rem !important; }

.justify-content-start {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between, .page-header {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.justify-content-evenly {
  -webkit-box-pack: space-evenly !important;
  -ms-flex-pack: space-evenly !important;
  justify-content: space-evenly !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center, .page-header, .loader-demo-box, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important; }

.order-first {
  -webkit-box-ordinal-group: 0 !important;
  -ms-flex-order: -1 !important;
  order: -1 !important; }

.order-0 {
  -webkit-box-ordinal-group: 1 !important;
  -ms-flex-order: 0 !important;
  order: 0 !important; }

.order-1 {
  -webkit-box-ordinal-group: 2 !important;
  -ms-flex-order: 1 !important;
  order: 1 !important; }

.order-2 {
  -webkit-box-ordinal-group: 3 !important;
  -ms-flex-order: 2 !important;
  order: 2 !important; }

.order-3 {
  -webkit-box-ordinal-group: 4 !important;
  -ms-flex-order: 3 !important;
  order: 3 !important; }

.order-4 {
  -webkit-box-ordinal-group: 5 !important;
  -ms-flex-order: 4 !important;
  order: 4 !important; }

.order-5 {
  -webkit-box-ordinal-group: 6 !important;
  -ms-flex-order: 5 !important;
  order: 5 !important; }

.order-last {
  -webkit-box-ordinal-group: 7 !important;
  -ms-flex-order: 6 !important;
  order: 6 !important; }

.m-0 {
  margin: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.m-auto {
  margin: auto !important; }

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important; }

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important; }

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important; }

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important; }

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important; }

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important; }

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important; }

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important; }

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important; }

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important; }

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important; }

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important; }

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important; }

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important; }

.mt-0, .demo-modal .modal-dialog {
  margin-top: 0 !important; }

.mt-1 {
  margin-top: 0.25rem !important; }

.mt-2, .template-demo > .btn-group,
.template-demo > .btn-group-vertical, .template-demo .circle-progress {
  margin-top: 0.5rem !important; }

.mt-3, .template-demo > .btn, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .template-demo > .btn-toolbar {
  margin-top: 1rem !important; }

.mt-4 {
  margin-top: 1.5rem !important; }

.mt-5 {
  margin-top: 3rem !important; }

.mt-auto {
  margin-top: auto !important; }

.me-0, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles, .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item i {
  margin-right: 0 !important; }

.me-1 {
  margin-right: 0.25rem !important; }

.me-2, .template-demo > .btn-group,
.template-demo > .btn-group-vertical, .template-demo > .dropdown {
  margin-right: 0.5rem !important; }

.me-3, .template-demo > .btn, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .template-demo > .btn-toolbar {
  margin-right: 1rem !important; }

.me-4 {
  margin-right: 1.5rem !important; }

.me-5 {
  margin-right: 3rem !important; }

.me-auto {
  margin-right: auto !important; }

.mb-0 {
  margin-bottom: 0 !important; }

.mb-1 {
  margin-bottom: 0.25rem !important; }

.mb-2 {
  margin-bottom: 0.5rem !important; }

.mb-3, .template-demo .circle-progress-block {
  margin-bottom: 1rem !important; }

.mb-4 {
  margin-bottom: 1.5rem !important; }

.mb-5 {
  margin-bottom: 3rem !important; }

.mb-auto {
  margin-bottom: auto !important; }

.ms-0, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i {
  margin-left: 0 !important; }

.ms-1 {
  margin-left: 0.25rem !important; }

.ms-2, .btn-toolbar .btn-group + .btn-group {
  margin-left: 0.5rem !important; }

.ms-3, .rtl .settings-panel .sidebar-bg-options .rounded-circle, .rtl .settings-panel .sidebar-bg-options .color-tiles .tiles, .rtl .settings-panel .color-tiles .sidebar-bg-options .tiles {
  margin-left: 1rem !important; }

.ms-4 {
  margin-left: 1.5rem !important; }

.ms-5 {
  margin-left: 3rem !important; }

.ms-auto {
  margin-left: auto !important; }

.p-0 {
  padding: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important; }

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important; }

.px-2, .template-demo .circle-progress-block {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important; }

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important; }

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important; }

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important; }

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important; }

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important; }

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important; }

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important; }

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important; }

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important; }

.pt-0 {
  padding-top: 0 !important; }

.pt-1 {
  padding-top: 0.25rem !important; }

.pt-2 {
  padding-top: 0.5rem !important; }

.pt-3 {
  padding-top: 1rem !important; }

.pt-4 {
  padding-top: 1.5rem !important; }

.pt-5 {
  padding-top: 3rem !important; }

.pe-0, body,
html {
  padding-right: 0 !important; }

.pe-1 {
  padding-right: 0.25rem !important; }

.pe-2 {
  padding-right: 0.5rem !important; }

.pe-3 {
  padding-right: 1rem !important; }

.pe-4 {
  padding-right: 1.5rem !important; }

.pe-5 {
  padding-right: 3rem !important; }

.pb-0 {
  padding-bottom: 0 !important; }

.pb-1 {
  padding-bottom: 0.25rem !important; }

.pb-2 {
  padding-bottom: 0.5rem !important; }

.pb-3 {
  padding-bottom: 1rem !important; }

.pb-4 {
  padding-bottom: 1.5rem !important; }

.pb-5 {
  padding-bottom: 3rem !important; }

.ps-0 {
  padding-left: 0 !important; }

.ps-1 {
  padding-left: 0.25rem !important; }

.ps-2 {
  padding-left: 0.5rem !important; }

.ps-3 {
  padding-left: 1rem !important; }

.ps-4 {
  padding-left: 1.5rem !important; }

.ps-5 {
  padding-left: 3rem !important; }

.font-monospace {
  font-family: var(--bs-font-monospace) !important; }

.fs-1 {
  font-size: calc(1.375rem + 1.5vw) !important; }

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important; }

.fs-3 {
  font-size: calc(1.3rem + 0.6vw) !important; }

.fs-4 {
  font-size: calc(1.275rem + 0.3vw) !important; }

.fs-5 {
  font-size: 1.25rem !important; }

.fs-6 {
  font-size: 1rem !important; }

.fst-italic {
  font-style: italic !important; }

.fst-normal {
  font-style: normal !important; }

.fw-light {
  font-weight: 300 !important; }

.fw-lighter {
  font-weight: lighter !important; }

.fw-normal {
  font-weight: 400 !important; }

.fw-bold {
  font-weight: 700 !important; }

.fw-bolder {
  font-weight: bolder !important; }

.lh-1 {
  line-height: 1 !important; }

.lh-sm {
  line-height: 1.25 !important; }

.lh-base {
  line-height: 1.5 !important; }

.lh-lg {
  line-height: 2 !important; }

.text-start {
  text-align: left !important; }

.text-end {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

.text-decoration-none {
  text-decoration: none !important; }

.text-decoration-underline {
  text-decoration: underline !important; }

.text-decoration-line-through {
  text-decoration: line-through !important; }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.text-wrap {
  white-space: normal !important; }

.text-nowrap {
  white-space: nowrap !important; }

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important; }

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important; }

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important; }

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important; }

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important; }

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important; }

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important; }

.text-light {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-light-rgb), var(--bs-text-opacity)) !important; }

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important; }

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important; }

.text-white, .navbar.navbar-primary .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-secondary .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-success .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-info .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-warning .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-danger .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-light .navbar-menu-wrapper .nav-profile-text p, .navbar.navbar-dark .navbar-menu-wrapper .nav-profile-text p {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important; }

.text-body {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-body-color-rgb), var(--bs-text-opacity)) !important; }

.text-muted, .preview-list .preview-item .preview-item-content p .content-category {
  --bs-text-opacity: 1;
  color: #6c7293 !important; }

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important; }

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important; }

.text-opacity-25 {
  --bs-text-opacity: 0.25; }

.text-opacity-50 {
  --bs-text-opacity: 0.5; }

.text-opacity-75 {
  --bs-text-opacity: 0.75; }

.text-opacity-100 {
  --bs-text-opacity: 1; }

.bg-primary, .settings-panel .color-tiles .tiles.primary, #theme-settings .settings-close {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important; }

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important; }

.bg-success, .settings-panel .color-tiles .tiles.success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important; }

.bg-info, .settings-panel .color-tiles .tiles.info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important; }

.bg-warning, .settings-panel .color-tiles .tiles.warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important; }

.bg-danger, .settings-panel .color-tiles .tiles.danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important; }

.bg-light, .settings-panel .color-tiles .tiles.light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important; }

.bg-dark, .settings-panel .color-tiles .tiles.dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important; }

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important; }

.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important; }

.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important; }

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important; }

.bg-opacity-10 {
  --bs-bg-opacity: 0.1; }

.bg-opacity-25 {
  --bs-bg-opacity: 0.25; }

.bg-opacity-50 {
  --bs-bg-opacity: 0.5; }

.bg-opacity-75 {
  --bs-bg-opacity: 0.75; }

.bg-opacity-100 {
  --bs-bg-opacity: 1; }

.bg-gradient {
  background-image: var(--bs-gradient) !important; }

.user-select-all {
  -webkit-user-select: all !important;
  -moz-user-select: all !important;
  -ms-user-select: all !important;
  user-select: all !important; }

.user-select-auto {
  -webkit-user-select: auto !important;
  -moz-user-select: auto !important;
  -ms-user-select: auto !important;
  user-select: auto !important; }

.user-select-none {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  -ms-user-select: none !important;
  user-select: none !important; }

.pe-none {
  pointer-events: none !important; }

.pe-auto {
  pointer-events: auto !important; }

.rounded, .loader-demo-box {
  border-radius: 0.25rem !important; }

.rounded-0 {
  border-radius: 0 !important; }

.rounded-1 {
  border-radius: 0.2rem !important; }

.rounded-2 {
  border-radius: 0.25rem !important; }

.rounded-3 {
  border-radius: 0.3rem !important; }

.rounded-circle, .settings-panel .color-tiles .tiles {
  border-radius: 50% !important; }

.rounded-pill {
  border-radius: 50rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-end {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-start {
  border-bottom-left-radius: 0.25rem !important;
  border-top-left-radius: 0.25rem !important; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media (min-width: 576px) {
  .float-sm-start {
    float: left !important; }
  .float-sm-end {
    float: right !important; }
  .float-sm-none {
    float: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-grid {
    display: grid !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-sm-none {
    display: none !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-sm-0 {
    gap: 0 !important; }
  .gap-sm-1 {
    gap: 0.25rem !important; }
  .gap-sm-2 {
    gap: 0.5rem !important; }
  .gap-sm-3 {
    gap: 1rem !important; }
  .gap-sm-4 {
    gap: 1.5rem !important; }
  .gap-sm-5 {
    gap: 3rem !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-sm-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-sm-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-sm-0 {
    margin: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-sm-0 {
    margin-top: 0 !important; }
  .mt-sm-1 {
    margin-top: 0.25rem !important; }
  .mt-sm-2 {
    margin-top: 0.5rem !important; }
  .mt-sm-3 {
    margin-top: 1rem !important; }
  .mt-sm-4 {
    margin-top: 1.5rem !important; }
  .mt-sm-5 {
    margin-top: 3rem !important; }
  .mt-sm-auto {
    margin-top: auto !important; }
  .me-sm-0 {
    margin-right: 0 !important; }
  .me-sm-1 {
    margin-right: 0.25rem !important; }
  .me-sm-2 {
    margin-right: 0.5rem !important; }
  .me-sm-3 {
    margin-right: 1rem !important; }
  .me-sm-4 {
    margin-right: 1.5rem !important; }
  .me-sm-5 {
    margin-right: 3rem !important; }
  .me-sm-auto {
    margin-right: auto !important; }
  .mb-sm-0 {
    margin-bottom: 0 !important; }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important; }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important; }
  .mb-sm-3 {
    margin-bottom: 1rem !important; }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important; }
  .mb-sm-5 {
    margin-bottom: 3rem !important; }
  .mb-sm-auto {
    margin-bottom: auto !important; }
  .ms-sm-0 {
    margin-left: 0 !important; }
  .ms-sm-1 {
    margin-left: 0.25rem !important; }
  .ms-sm-2 {
    margin-left: 0.5rem !important; }
  .ms-sm-3 {
    margin-left: 1rem !important; }
  .ms-sm-4 {
    margin-left: 1.5rem !important; }
  .ms-sm-5 {
    margin-left: 3rem !important; }
  .ms-sm-auto {
    margin-left: auto !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-sm-0 {
    padding-top: 0 !important; }
  .pt-sm-1 {
    padding-top: 0.25rem !important; }
  .pt-sm-2 {
    padding-top: 0.5rem !important; }
  .pt-sm-3 {
    padding-top: 1rem !important; }
  .pt-sm-4 {
    padding-top: 1.5rem !important; }
  .pt-sm-5 {
    padding-top: 3rem !important; }
  .pe-sm-0 {
    padding-right: 0 !important; }
  .pe-sm-1 {
    padding-right: 0.25rem !important; }
  .pe-sm-2 {
    padding-right: 0.5rem !important; }
  .pe-sm-3 {
    padding-right: 1rem !important; }
  .pe-sm-4 {
    padding-right: 1.5rem !important; }
  .pe-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-0 {
    padding-bottom: 0 !important; }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pb-sm-3 {
    padding-bottom: 1rem !important; }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pb-sm-5 {
    padding-bottom: 3rem !important; }
  .ps-sm-0 {
    padding-left: 0 !important; }
  .ps-sm-1 {
    padding-left: 0.25rem !important; }
  .ps-sm-2 {
    padding-left: 0.5rem !important; }
  .ps-sm-3 {
    padding-left: 1rem !important; }
  .ps-sm-4 {
    padding-left: 1.5rem !important; }
  .ps-sm-5 {
    padding-left: 3rem !important; }
  .text-sm-start {
    text-align: left !important; }
  .text-sm-end {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .float-md-start {
    float: left !important; }
  .float-md-end {
    float: right !important; }
  .float-md-none {
    float: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-grid {
    display: grid !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-md-none {
    display: none !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-md-0 {
    gap: 0 !important; }
  .gap-md-1 {
    gap: 0.25rem !important; }
  .gap-md-2 {
    gap: 0.5rem !important; }
  .gap-md-3 {
    gap: 1rem !important; }
  .gap-md-4 {
    gap: 1.5rem !important; }
  .gap-md-5 {
    gap: 3rem !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-md-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; }
  .order-md-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-md-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-md-0 {
    margin: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-md-0 {
    margin-top: 0 !important; }
  .mt-md-1 {
    margin-top: 0.25rem !important; }
  .mt-md-2 {
    margin-top: 0.5rem !important; }
  .mt-md-3 {
    margin-top: 1rem !important; }
  .mt-md-4 {
    margin-top: 1.5rem !important; }
  .mt-md-5 {
    margin-top: 3rem !important; }
  .mt-md-auto {
    margin-top: auto !important; }
  .me-md-0 {
    margin-right: 0 !important; }
  .me-md-1 {
    margin-right: 0.25rem !important; }
  .me-md-2 {
    margin-right: 0.5rem !important; }
  .me-md-3 {
    margin-right: 1rem !important; }
  .me-md-4 {
    margin-right: 1.5rem !important; }
  .me-md-5 {
    margin-right: 3rem !important; }
  .me-md-auto {
    margin-right: auto !important; }
  .mb-md-0 {
    margin-bottom: 0 !important; }
  .mb-md-1 {
    margin-bottom: 0.25rem !important; }
  .mb-md-2 {
    margin-bottom: 0.5rem !important; }
  .mb-md-3 {
    margin-bottom: 1rem !important; }
  .mb-md-4 {
    margin-bottom: 1.5rem !important; }
  .mb-md-5 {
    margin-bottom: 3rem !important; }
  .mb-md-auto {
    margin-bottom: auto !important; }
  .ms-md-0 {
    margin-left: 0 !important; }
  .ms-md-1 {
    margin-left: 0.25rem !important; }
  .ms-md-2 {
    margin-left: 0.5rem !important; }
  .ms-md-3 {
    margin-left: 1rem !important; }
  .ms-md-4 {
    margin-left: 1.5rem !important; }
  .ms-md-5 {
    margin-left: 3rem !important; }
  .ms-md-auto {
    margin-left: auto !important; }
  .p-md-0 {
    padding: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-md-0 {
    padding-top: 0 !important; }
  .pt-md-1 {
    padding-top: 0.25rem !important; }
  .pt-md-2 {
    padding-top: 0.5rem !important; }
  .pt-md-3 {
    padding-top: 1rem !important; }
  .pt-md-4 {
    padding-top: 1.5rem !important; }
  .pt-md-5 {
    padding-top: 3rem !important; }
  .pe-md-0 {
    padding-right: 0 !important; }
  .pe-md-1 {
    padding-right: 0.25rem !important; }
  .pe-md-2 {
    padding-right: 0.5rem !important; }
  .pe-md-3 {
    padding-right: 1rem !important; }
  .pe-md-4 {
    padding-right: 1.5rem !important; }
  .pe-md-5 {
    padding-right: 3rem !important; }
  .pb-md-0 {
    padding-bottom: 0 !important; }
  .pb-md-1 {
    padding-bottom: 0.25rem !important; }
  .pb-md-2 {
    padding-bottom: 0.5rem !important; }
  .pb-md-3 {
    padding-bottom: 1rem !important; }
  .pb-md-4 {
    padding-bottom: 1.5rem !important; }
  .pb-md-5 {
    padding-bottom: 3rem !important; }
  .ps-md-0 {
    padding-left: 0 !important; }
  .ps-md-1 {
    padding-left: 0.25rem !important; }
  .ps-md-2 {
    padding-left: 0.5rem !important; }
  .ps-md-3 {
    padding-left: 1rem !important; }
  .ps-md-4 {
    padding-left: 1.5rem !important; }
  .ps-md-5 {
    padding-left: 3rem !important; }
  .text-md-start {
    text-align: left !important; }
  .text-md-end {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .float-lg-start {
    float: left !important; }
  .float-lg-end {
    float: right !important; }
  .float-lg-none {
    float: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-grid {
    display: grid !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-lg-none {
    display: none !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-lg-0 {
    gap: 0 !important; }
  .gap-lg-1 {
    gap: 0.25rem !important; }
  .gap-lg-2 {
    gap: 0.5rem !important; }
  .gap-lg-3 {
    gap: 1rem !important; }
  .gap-lg-4 {
    gap: 1.5rem !important; }
  .gap-lg-5 {
    gap: 3rem !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-lg-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-lg-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-lg-0 {
    margin: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-lg-0 {
    margin-top: 0 !important; }
  .mt-lg-1 {
    margin-top: 0.25rem !important; }
  .mt-lg-2 {
    margin-top: 0.5rem !important; }
  .mt-lg-3 {
    margin-top: 1rem !important; }
  .mt-lg-4 {
    margin-top: 1.5rem !important; }
  .mt-lg-5 {
    margin-top: 3rem !important; }
  .mt-lg-auto {
    margin-top: auto !important; }
  .me-lg-0 {
    margin-right: 0 !important; }
  .me-lg-1 {
    margin-right: 0.25rem !important; }
  .me-lg-2 {
    margin-right: 0.5rem !important; }
  .me-lg-3 {
    margin-right: 1rem !important; }
  .me-lg-4 {
    margin-right: 1.5rem !important; }
  .me-lg-5 {
    margin-right: 3rem !important; }
  .me-lg-auto {
    margin-right: auto !important; }
  .mb-lg-0 {
    margin-bottom: 0 !important; }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important; }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important; }
  .mb-lg-3 {
    margin-bottom: 1rem !important; }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important; }
  .mb-lg-5 {
    margin-bottom: 3rem !important; }
  .mb-lg-auto {
    margin-bottom: auto !important; }
  .ms-lg-0 {
    margin-left: 0 !important; }
  .ms-lg-1 {
    margin-left: 0.25rem !important; }
  .ms-lg-2 {
    margin-left: 0.5rem !important; }
  .ms-lg-3 {
    margin-left: 1rem !important; }
  .ms-lg-4 {
    margin-left: 1.5rem !important; }
  .ms-lg-5 {
    margin-left: 3rem !important; }
  .ms-lg-auto {
    margin-left: auto !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-lg-0 {
    padding-top: 0 !important; }
  .pt-lg-1 {
    padding-top: 0.25rem !important; }
  .pt-lg-2 {
    padding-top: 0.5rem !important; }
  .pt-lg-3 {
    padding-top: 1rem !important; }
  .pt-lg-4 {
    padding-top: 1.5rem !important; }
  .pt-lg-5 {
    padding-top: 3rem !important; }
  .pe-lg-0 {
    padding-right: 0 !important; }
  .pe-lg-1 {
    padding-right: 0.25rem !important; }
  .pe-lg-2 {
    padding-right: 0.5rem !important; }
  .pe-lg-3 {
    padding-right: 1rem !important; }
  .pe-lg-4 {
    padding-right: 1.5rem !important; }
  .pe-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-0 {
    padding-bottom: 0 !important; }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pb-lg-3 {
    padding-bottom: 1rem !important; }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pb-lg-5 {
    padding-bottom: 3rem !important; }
  .ps-lg-0 {
    padding-left: 0 !important; }
  .ps-lg-1 {
    padding-left: 0.25rem !important; }
  .ps-lg-2 {
    padding-left: 0.5rem !important; }
  .ps-lg-3 {
    padding-left: 1rem !important; }
  .ps-lg-4 {
    padding-left: 1.5rem !important; }
  .ps-lg-5 {
    padding-left: 3rem !important; }
  .text-lg-start {
    text-align: left !important; }
  .text-lg-end {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important; }
  .float-xl-end {
    float: right !important; }
  .float-xl-none {
    float: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-grid {
    display: grid !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-xl-none {
    display: none !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-xl-0 {
    gap: 0 !important; }
  .gap-xl-1 {
    gap: 0.25rem !important; }
  .gap-xl-2 {
    gap: 0.5rem !important; }
  .gap-xl-3 {
    gap: 1rem !important; }
  .gap-xl-4 {
    gap: 1.5rem !important; }
  .gap-xl-5 {
    gap: 3rem !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-xl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-xl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-xl-0 {
    margin: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-xl-0 {
    margin-top: 0 !important; }
  .mt-xl-1 {
    margin-top: 0.25rem !important; }
  .mt-xl-2 {
    margin-top: 0.5rem !important; }
  .mt-xl-3 {
    margin-top: 1rem !important; }
  .mt-xl-4 {
    margin-top: 1.5rem !important; }
  .mt-xl-5 {
    margin-top: 3rem !important; }
  .mt-xl-auto {
    margin-top: auto !important; }
  .me-xl-0 {
    margin-right: 0 !important; }
  .me-xl-1 {
    margin-right: 0.25rem !important; }
  .me-xl-2 {
    margin-right: 0.5rem !important; }
  .me-xl-3 {
    margin-right: 1rem !important; }
  .me-xl-4 {
    margin-right: 1.5rem !important; }
  .me-xl-5 {
    margin-right: 3rem !important; }
  .me-xl-auto {
    margin-right: auto !important; }
  .mb-xl-0 {
    margin-bottom: 0 !important; }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important; }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important; }
  .mb-xl-3 {
    margin-bottom: 1rem !important; }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important; }
  .mb-xl-5 {
    margin-bottom: 3rem !important; }
  .mb-xl-auto {
    margin-bottom: auto !important; }
  .ms-xl-0 {
    margin-left: 0 !important; }
  .ms-xl-1 {
    margin-left: 0.25rem !important; }
  .ms-xl-2 {
    margin-left: 0.5rem !important; }
  .ms-xl-3 {
    margin-left: 1rem !important; }
  .ms-xl-4 {
    margin-left: 1.5rem !important; }
  .ms-xl-5 {
    margin-left: 3rem !important; }
  .ms-xl-auto {
    margin-left: auto !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-xl-0 {
    padding-top: 0 !important; }
  .pt-xl-1 {
    padding-top: 0.25rem !important; }
  .pt-xl-2 {
    padding-top: 0.5rem !important; }
  .pt-xl-3 {
    padding-top: 1rem !important; }
  .pt-xl-4 {
    padding-top: 1.5rem !important; }
  .pt-xl-5 {
    padding-top: 3rem !important; }
  .pe-xl-0 {
    padding-right: 0 !important; }
  .pe-xl-1 {
    padding-right: 0.25rem !important; }
  .pe-xl-2 {
    padding-right: 0.5rem !important; }
  .pe-xl-3 {
    padding-right: 1rem !important; }
  .pe-xl-4 {
    padding-right: 1.5rem !important; }
  .pe-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-0 {
    padding-bottom: 0 !important; }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pb-xl-3 {
    padding-bottom: 1rem !important; }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pb-xl-5 {
    padding-bottom: 3rem !important; }
  .ps-xl-0 {
    padding-left: 0 !important; }
  .ps-xl-1 {
    padding-left: 0.25rem !important; }
  .ps-xl-2 {
    padding-left: 0.5rem !important; }
  .ps-xl-3 {
    padding-left: 1rem !important; }
  .ps-xl-4 {
    padding-left: 1.5rem !important; }
  .ps-xl-5 {
    padding-left: 3rem !important; }
  .text-xl-start {
    text-align: left !important; }
  .text-xl-end {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important; }
  .float-xxl-end {
    float: right !important; }
  .float-xxl-none {
    float: none !important; }
  .d-xxl-inline {
    display: inline !important; }
  .d-xxl-inline-block {
    display: inline-block !important; }
  .d-xxl-block {
    display: block !important; }
  .d-xxl-grid {
    display: grid !important; }
  .d-xxl-table {
    display: table !important; }
  .d-xxl-table-row {
    display: table-row !important; }
  .d-xxl-table-cell {
    display: table-cell !important; }
  .d-xxl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xxl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-xxl-none {
    display: none !important; }
  .flex-xxl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xxl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xxl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xxl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xxl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xxl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xxl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xxl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xxl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .flex-xxl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xxl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xxl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .gap-xxl-0 {
    gap: 0 !important; }
  .gap-xxl-1 {
    gap: 0.25rem !important; }
  .gap-xxl-2 {
    gap: 0.5rem !important; }
  .gap-xxl-3 {
    gap: 1rem !important; }
  .gap-xxl-4 {
    gap: 1.5rem !important; }
  .gap-xxl-5 {
    gap: 3rem !important; }
  .justify-content-xxl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xxl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xxl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xxl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xxl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .justify-content-xxl-evenly {
    -webkit-box-pack: space-evenly !important;
    -ms-flex-pack: space-evenly !important;
    justify-content: space-evenly !important; }
  .align-items-xxl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xxl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xxl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xxl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xxl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xxl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xxl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xxl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xxl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xxl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xxl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xxl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-xxl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xxl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xxl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-xxl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xxl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; }
  .order-xxl-first {
    -webkit-box-ordinal-group: 0 !important;
    -ms-flex-order: -1 !important;
    order: -1 !important; }
  .order-xxl-0 {
    -webkit-box-ordinal-group: 1 !important;
    -ms-flex-order: 0 !important;
    order: 0 !important; }
  .order-xxl-1 {
    -webkit-box-ordinal-group: 2 !important;
    -ms-flex-order: 1 !important;
    order: 1 !important; }
  .order-xxl-2 {
    -webkit-box-ordinal-group: 3 !important;
    -ms-flex-order: 2 !important;
    order: 2 !important; }
  .order-xxl-3 {
    -webkit-box-ordinal-group: 4 !important;
    -ms-flex-order: 3 !important;
    order: 3 !important; }
  .order-xxl-4 {
    -webkit-box-ordinal-group: 5 !important;
    -ms-flex-order: 4 !important;
    order: 4 !important; }
  .order-xxl-5 {
    -webkit-box-ordinal-group: 6 !important;
    -ms-flex-order: 5 !important;
    order: 5 !important; }
  .order-xxl-last {
    -webkit-box-ordinal-group: 7 !important;
    -ms-flex-order: 6 !important;
    order: 6 !important; }
  .m-xxl-0 {
    margin: 0 !important; }
  .m-xxl-1 {
    margin: 0.25rem !important; }
  .m-xxl-2 {
    margin: 0.5rem !important; }
  .m-xxl-3 {
    margin: 1rem !important; }
  .m-xxl-4 {
    margin: 1.5rem !important; }
  .m-xxl-5 {
    margin: 3rem !important; }
  .m-xxl-auto {
    margin: auto !important; }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important; }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important; }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important; }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important; }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important; }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important; }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important; }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important; }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important; }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important; }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important; }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important; }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important; }
  .mt-xxl-0 {
    margin-top: 0 !important; }
  .mt-xxl-1 {
    margin-top: 0.25rem !important; }
  .mt-xxl-2 {
    margin-top: 0.5rem !important; }
  .mt-xxl-3 {
    margin-top: 1rem !important; }
  .mt-xxl-4 {
    margin-top: 1.5rem !important; }
  .mt-xxl-5 {
    margin-top: 3rem !important; }
  .mt-xxl-auto {
    margin-top: auto !important; }
  .me-xxl-0 {
    margin-right: 0 !important; }
  .me-xxl-1 {
    margin-right: 0.25rem !important; }
  .me-xxl-2 {
    margin-right: 0.5rem !important; }
  .me-xxl-3 {
    margin-right: 1rem !important; }
  .me-xxl-4 {
    margin-right: 1.5rem !important; }
  .me-xxl-5 {
    margin-right: 3rem !important; }
  .me-xxl-auto {
    margin-right: auto !important; }
  .mb-xxl-0 {
    margin-bottom: 0 !important; }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important; }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important; }
  .mb-xxl-3 {
    margin-bottom: 1rem !important; }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important; }
  .mb-xxl-5 {
    margin-bottom: 3rem !important; }
  .mb-xxl-auto {
    margin-bottom: auto !important; }
  .ms-xxl-0 {
    margin-left: 0 !important; }
  .ms-xxl-1 {
    margin-left: 0.25rem !important; }
  .ms-xxl-2 {
    margin-left: 0.5rem !important; }
  .ms-xxl-3 {
    margin-left: 1rem !important; }
  .ms-xxl-4 {
    margin-left: 1.5rem !important; }
  .ms-xxl-5 {
    margin-left: 3rem !important; }
  .ms-xxl-auto {
    margin-left: auto !important; }
  .p-xxl-0 {
    padding: 0 !important; }
  .p-xxl-1 {
    padding: 0.25rem !important; }
  .p-xxl-2 {
    padding: 0.5rem !important; }
  .p-xxl-3 {
    padding: 1rem !important; }
  .p-xxl-4 {
    padding: 1.5rem !important; }
  .p-xxl-5 {
    padding: 3rem !important; }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important; }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important; }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important; }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important; }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important; }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important; }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important; }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important; }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important; }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important; }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important; }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important; }
  .pt-xxl-0 {
    padding-top: 0 !important; }
  .pt-xxl-1 {
    padding-top: 0.25rem !important; }
  .pt-xxl-2 {
    padding-top: 0.5rem !important; }
  .pt-xxl-3 {
    padding-top: 1rem !important; }
  .pt-xxl-4 {
    padding-top: 1.5rem !important; }
  .pt-xxl-5 {
    padding-top: 3rem !important; }
  .pe-xxl-0 {
    padding-right: 0 !important; }
  .pe-xxl-1 {
    padding-right: 0.25rem !important; }
  .pe-xxl-2 {
    padding-right: 0.5rem !important; }
  .pe-xxl-3 {
    padding-right: 1rem !important; }
  .pe-xxl-4 {
    padding-right: 1.5rem !important; }
  .pe-xxl-5 {
    padding-right: 3rem !important; }
  .pb-xxl-0 {
    padding-bottom: 0 !important; }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important; }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important; }
  .pb-xxl-3 {
    padding-bottom: 1rem !important; }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important; }
  .pb-xxl-5 {
    padding-bottom: 3rem !important; }
  .ps-xxl-0 {
    padding-left: 0 !important; }
  .ps-xxl-1 {
    padding-left: 0.25rem !important; }
  .ps-xxl-2 {
    padding-left: 0.5rem !important; }
  .ps-xxl-3 {
    padding-left: 1rem !important; }
  .ps-xxl-4 {
    padding-left: 1.5rem !important; }
  .ps-xxl-5 {
    padding-left: 3rem !important; }
  .text-xxl-start {
    text-align: left !important; }
  .text-xxl-end {
    text-align: right !important; }
  .text-xxl-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.5rem !important; }
  .fs-2 {
    font-size: 2rem !important; }
  .fs-3 {
    font-size: 1.75rem !important; }
  .fs-4 {
    font-size: 1.5rem !important; } }

@media print {
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-grid {
    display: grid !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; }
  .d-print-none {
    display: none !important; } }

/*-------------------------------------------------------------------*/
/* === Template mixins === */
/* Miscellaneous Mixins */
.settings-panel .chat-list .list .info p {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap; }

/* Animation Mixins */
@-webkit-keyframes dropdownAnimation {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
    -webkit-transform: translate3d(0, 0px, 0);
    transform: translate3d(0, 0px, 0); } }
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
    -webkit-transform: translate3d(0, 0px, 0);
    transform: translate3d(0, 0px, 0); } }

.dropdownAnimation, .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
  -webkit-animation-name: dropdownAnimation;
  animation-name: dropdownAnimation;
  -webkit-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

@keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut; }

.infinite-spin, #settings-trigger i {
  -webkit-animation-name: spin;
  animation-name: spin;
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear; }

@-webkit-keyframes spin {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes spin {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInUp, #settings-trigger {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp; }

/*-------------------------------------------------------------------*/
/* === Core Styles === */
/* Reset Styles */
body {
  padding: 0;
  margin: 0;
  overflow-x: hidden; }

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint, .form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none; }

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  -webkit-box-shadow: none;
  box-shadow: none; }

.form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none; }

a,
div, h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5,
p,
span {
  text-shadow: none; }

[type=button]:focus,
a:active,
a:focus,
a:visited,
button::-moz-focus-inner,
input[type=reset]::-moz-focus-inner,
input[type=button]::-moz-focus-inner,
input[type=submit]::-moz-focus-inner,
input[type=file] > input[type=button]::-moz-focus-inner,
select::-moz-focus-inner {
  outline: 0; }

input, .form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
  outline-width: 0;
  outline-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline-style: none; }

textarea {
  resize: none;
  overflow-x: hidden; }

.btn, .ajax-upload-dragdrop .ajax-file-upload,
.btn-group.open .dropdown-toggle,
.btn:active,
.ajax-upload-dragdrop .ajax-file-upload:active, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .btn:hover, .ajax-upload-dragdrop .ajax-file-upload:hover,
.btn:visited,
.ajax-upload-dragdrop .ajax-file-upload:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:focus,
input:hover,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:hover,
textarea:visited {
  -webkit-box-shadow: none;
  box-shadow: none; }

.btn.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload,
.btn.active:focus,
.ajax-upload-dragdrop .active.ajax-file-upload:focus,
.btn.focus,
.ajax-upload-dragdrop .focus.ajax-file-upload,
.btn:active.focus,
.ajax-upload-dragdrop .ajax-file-upload:active.focus,
.btn:active:focus,
.ajax-upload-dragdrop .ajax-file-upload:active:focus, .btn:focus, .ajax-upload-dragdrop .ajax-file-upload:focus,
button,
button:active,
button:checked,
button:focus,
button:hover,
button:visited {
  outline: 0;
  outline-offset: 0; }

.bootstrap-select .dropdown-toggle:focus {
  outline: 0;
  outline-offset: 0; }

.dropdown-menu > li > a:active,
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:visited {
  outline: 0; }

a:focus,
input:focus {
  border-color: transparent;
  outline: none; }

/* Fonts */
@font-face {
  font-family: "Open Sans";
  src: url("../../fonts/Opensans/OpenSans-Light.eot");
  /* IE9 Compat Modes */
  src: url("../../fonts/Opensans/OpenSans-Light.woff2") format("woff2"), url("../../fonts/Opensans/OpenSans-Light.woff") format("woff"), url("../../fonts/Opensans/OpenSans-Light.ttf") format("truetype");
  /* Safari, Android, iOS */
  font-weight: 300;
  font-style: normal; }

@font-face {
  font-family: "Open Sans";
  src: url("../../fonts/Opensans/OpenSans-Regular.eot");
  /* IE9 Compat Modes */
  src: url("../../fonts/Opensans/OpenSans-Regular.woff2") format("woff2"), url("../../fonts/Opensans/OpenSans-Regular.woff") format("woff"), url("../../fonts/Opensans/OpenSans-Regular.ttf") format("truetype");
  /* Safari, Android, iOS */
  font-weight: 400;
  font-style: normal; }

@font-face {
  font-family: "Open Sans";
  src: url("../../fonts/Opensans/OpenSans-SemiBold.eot");
  /* IE9 Compat Modes */
  src: url("../../fonts/Opensans/OpenSans-SemiBold.woff2") format("woff2"), url("../../fonts/Opensans/OpenSans-SemiBold.woff") format("woff"), url("../../fonts/Opensans/OpenSans-SemiBold.ttf") format("truetype");
  /* Safari, Android, iOS */
  font-weight: 600;
  font-style: normal; }

@font-face {
  font-family: "Open Sans";
  src: url("../../fonts/Opensans/OpenSans-Bold.eot");
  /* IE9 Compat Modes */
  src: url("../../fonts/Opensans/OpenSans-Bold.woff2") format("woff2"), url("../../fonts/Opensans/OpenSans-Bold.woff") format("woff"), url("../../fonts/Opensans/OpenSans-Bold.ttf") format("truetype");
  /* Safari, Android, iOS */
  font-weight: 700;
  font-style: normal; }

.text-twitter {
  color: #2caae1; }

.text-facebook {
  color: #3b579d; }

.text-google {
  color: #dc4a38; }

.text-linkedin {
  color: #0177b5; }

.text-pinterest {
  color: #cc2127; }

.text-youtube {
  color: #e52d27; }

.text-github {
  color: #333333; }

.text-behance {
  color: #1769ff; }

.text-dribbble {
  color: #ea4c89; }

.text-reddit {
  color: #ff4500; }

.bg-twitter {
  background: #2caae1; }

.bg-facebook {
  background: #3b579d; }

.bg-google {
  background: #dc4a38; }

.bg-linkedin {
  background: #0177b5; }

.bg-pinterest {
  background: #cc2127; }

.bg-youtube {
  background: #e52d27; }

.bg-github {
  background: #333333; }

.bg-behance {
  background: #1769ff; }

.bg-dribbble {
  background: #ea4c89; }

.bg-reddit {
  background: #ff4500; }

/* Typography */
body {
  font-size: 1rem;
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  font-weight: initial;
  line-height: normal;
  -webkit-font-smoothing: antialiased; }

h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: "Open Sans", sans-serif;
  font-weight: 600; }

p {
  font-size: 0.875rem; }

h1, .h1,
.h1 {
  font-size: 2.19rem; }

h2, .h2,
.h2 {
  font-size: 1.88rem; }

h3, .h3,
.h3 {
  font-size: 1.5rem; }

h4, .h4,
.h4 {
  font-size: 18px; }

h5, .h5,
.h5 {
  font-size: 1rem; }

h6, .h6,
.h6 {
  font-size: .9375rem; }

p {
  font-size: 14px;
  line-height: 1.5; }

.display-1 {
  font-size: 3.75rem; }
  @media (max-width: 991px) {
    .display-1 {
      font-size: 3rem; } }

.display-2 {
  font-size: 3.125rem; }
  @media (max-width: 991px) {
    .display-2 {
      font-size: 2.5rem; } }

.display-3 {
  font-size: 2.5rem; }
  @media (max-width: 991px) {
    .display-3 {
      font-size: 2rem; } }

.display-4 {
  font-size: 1.875rem; }
  @media (max-width: 991px) {
    .display-4 {
      font-size: 1.5rem; } }

.display-5 {
  font-size: 1.25rem; }
  @media (max-width: 991px) {
    .display-5 {
      font-size: 1rem; } }

.blockquote {
  padding: 1.25rem;
  border: 1px solid #e4e9f0; }

address p {
  margin-bottom: 0; }

.blockquote-primary {
  border-color: #0033c4; }
  .blockquote-primary .blockquote-footer {
    color: #0033c4; }

.blockquote-secondary {
  border-color: #a0a0a0; }
  .blockquote-secondary .blockquote-footer {
    color: #a0a0a0; }

.blockquote-success {
  border-color: #00d284; }
  .blockquote-success .blockquote-footer {
    color: #00d284; }

.blockquote-info {
  border-color: #00cff4; }
  .blockquote-info .blockquote-footer {
    color: #00cff4; }

.blockquote-warning {
  border-color: #ff5730; }
  .blockquote-warning .blockquote-footer {
    color: #ff5730; }

.blockquote-danger {
  border-color: #ff0854; }
  .blockquote-danger .blockquote-footer {
    color: #ff0854; }

.blockquote-light {
  border-color: #f8f9fa; }
  .blockquote-light .blockquote-footer {
    color: #f8f9fa; }

.blockquote-dark {
  border-color: #3e4b5b; }
  .blockquote-dark .blockquote-footer {
    color: #3e4b5b; }

.error-page h1, .error-page .h1 {
  font-size: 12rem; }
  @media (max-width: 991px) {
    .error-page h1, .error-page .h1 {
      font-size: 8rem; } }

.icon-lg {
  font-size: 2.5rem; }

.icon-md {
  font-size: 1.875rem; }

.icon-sm {
  font-size: 1rem; }

/* Miscellanoeous */
body,
html {
  overflow-x: hidden; }

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-fullscreen {
  overflow: auto; }

.container-scroller {
  overflow: hidden; }

pre {
  background: color(gray-lighter);
  padding: 15px;
  font-size: 14px; }

code {
  padding: 5px;
  color: #ff0854;
  font-family: "Open Sans", sans-serif;
  font-weight: 300;
  font-size: 0.875rem;
  border-radius: 4px; }

.page-header {
  margin: 0 0 1.5rem 0; }
  .page-header .header-right .btn, .page-header .header-right .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .page-header .header-right .ajax-file-upload {
    padding: 0 14px; }
    .page-header .header-right .btn + .btn, .page-header .header-right .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .page-header .header-right .ajax-file-upload + .btn, .page-header .header-right .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .page-header .header-right .btn + .ajax-file-upload, .page-header .header-right .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .page-header .header-right .ajax-file-upload + .ajax-file-upload {
      border-left: 1px solid #000000;
      border-radius: 0; }
    .page-header .header-right .btn.btn-product-text, .page-header .header-right .ajax-upload-dragdrop .btn-product-text.ajax-file-upload, .ajax-upload-dragdrop .page-header .header-right .btn-product-text.ajax-file-upload {
      padding: 6px 15px 6px 0;
      background: #00d284;
      color: #fff;
      border-radius: 4px; }
      .page-header .header-right .btn.btn-product-text i, .page-header .header-right .ajax-upload-dragdrop .btn-product-text.ajax-file-upload i, .ajax-upload-dragdrop .page-header .header-right .btn-product-text.ajax-file-upload i {
        background: #069962;
        padding: 3px 8px 3px 8px;
        color: #fff;
        font-size: 20px;
        margin-right: 14px; }

/* Footer */
.footer {
  background: #f8f9fb;
  color: color(dark);
  padding: 5px 25px 12px 37px;
  transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -webkit-transition: all 0.25s ease;
  -ms-transition: all 0.25s ease;
  font-size: calc(0.875rem - 0.05rem);
  font-family: "Open Sans", sans-serif;
  font-weight: 400; }
  .footer a {
    color: #00d284;
    font-size: inherit; }
  @media (max-width: 991px) {
    .footer {
      margin-left: 0;
      width: 100%; } }

/* Utilities */
.grid-margin {
  margin-bottom: 30px; }

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0; } }

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0; } }

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0; } }

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0; } }

.img-lg {
  width: 92px;
  height: 92px; }

.img-sm {
  width: 43px;
  height: 43px; }

.img-xs {
  width: 37px;
  height: 37px; }

.img-ss, .image-grouped .text-avatar,
.image-grouped img, .settings-panel .color-tiles .tiles {
  width: 35px;
  height: 35px; }

.stretch-card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  -webkit-box-pack: stretch;
  -ms-flex-pack: stretch;
  justify-content: stretch; }
  .stretch-card > .card {
    width: 100%;
    min-width: 100%; }

@media (min-width: 576px) {
  .border-right-sm {
    border-right: 1px solid #e4e9f0; } }

@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #e4e9f0; } }

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #e4e9f0; } }

@media (min-width: 576px) {
  .border-left-sm {
    border-left: 1px solid #e4e9f0; } }

@media (min-width: 768px) {
  .border-left-md {
    border-left: 1px solid #e4e9f0; } }

@media (min-width: 992px) {
  .border-left-lg {
    border-left: 1px solid #e4e9f0; } }

.text-gray, .card .card-subtitle {
  color: #8c8c8c; }

.text-black {
  color: #000000; }

.flex-grow {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }

.mouse-pointer {
  cursor: pointer; }

.font-10 {
  font-size: 10px; }

.font-12 {
  font-size: 12px; }

.font-13 {
  font-size: 13px; }

.font-20 {
  font-size: 20px; }

.text-dark {
  color: #313131; }

.font-weight-light {
  font-family: "Open Sans", sans-serif;
  font-weight: 300; }

.font-weight-bold {
  font-family: "Open Sans", sans-serif;
  font-weight: 700; }

.font-weight-normal {
  font-family: "Open Sans", sans-serif;
  font-weight: 400; }

.font-weight-semibold {
  font-family: "Open Sans", sans-serif;
  font-weight: 600; }

.image-grouped {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .image-grouped .text-avatar,
  .image-grouped img {
    border-radius: 100%;
    margin-left: -10px;
    z-index: 0;
    border: 4px solid #fff;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease;
    transition-timing-function: ease;
    -webkit-transition-property: "box-shadow", "z-index", "transform", "border-width", "box-shadow", "transform";
    transition-property: "box-shadow", "z-index", "transform", "border-width", "box-shadow", "transform";
    transition-property: "box-shadow", "z-index", "transform", "border-width"; }
    .image-grouped .text-avatar:first-child,
    .image-grouped img:first-child {
      margin-left: 0; }
    .image-grouped .text-avatar:hover,
    .image-grouped img:hover {
      z-index: 1;
      -webkit-box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.5);
      -webkit-transform: scale(1.05);
      transform: scale(1.05);
      border-width: 0; }
  .image-grouped .text-avatar {
    color: #0033c4;
    font-size: 11px;
    font-weight: 600; }

.aligner-wrapper {
  position: relative; }
  .aligner-wrapper .absolute {
    position: absolute; }
    .aligner-wrapper .absolute.absolute-center {
      top: 50%;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      bottom: 0;
      right: 0;
      left: 0;
      margin: auto; }
    .aligner-wrapper .absolute.left {
      left: 0; }
    .aligner-wrapper .absolute.right {
      right: 0; }
    .aligner-wrapper .absolute.bottom {
      bottom: 0; }
    .aligner-wrapper .absolute.top {
      top: 0; }

.v-strock-1 {
  width: 2px; }

.v-strock-2 {
  width: 3px; }

.v-strock-3 {
  width: 4px; }

.v-strock-4 {
  width: 5px; }

.dot-indicator {
  width: 10px;
  height: 10px;
  border-radius: 100%; }
  .dot-indicator.dot-indicator-sm {
    width: 6px;
    height: 6px; }

.text-small {
  font-size: 12px; }

/* Demo Styles */
.template-demo .slider-wrap {
  height: 100px; }

.template-demo .progress {
  margin-top: 1.5rem; }

.template-demo > h2, .template-demo > .h2,
.template-demo > h3,
.template-demo > .h3,
.template-demo > h4,
.template-demo > .h4,
.template-demo > h5,
.template-demo > .h5,
.template-demo > h6,
.template-demo > .h6,
.template-demo > h1,
.template-demo > .h1 {
  border-top: 1px solid #e4e9f0;
  padding: 0.5rem 0 0; }

.template-demo .ul-slider.noUi-horizontal {
  margin-top: 2rem; }

.template-demo .ul-slider.noUi-vertical {
  margin-right: 2rem; }

.template-demo > .dropdown {
  display: inline-block;
  margin-bottom: 0.5rem; }

.template-demo nav .breadcrumb {
  margin-bottom: 1.375rem; }

.template-demo nav:last-child .breadcrumb {
  margin-bottom: 0; }

.template-demo .editable-form > .form-group {
  border-bottom: 1px solid #e4e9f0;
  padding-bottom: 0.8rem;
  margin-bottom: 0.8rem; }

.template-demo .circle-progress {
  padding: 15px; }

.demo-modal {
  position: static;
  display: block; }
  .demo-modal .modal-dialog.modal-lg {
    max-width: 100%; }

.loader-demo-box {
  width: 100%;
  height: 200px; }

.dropdown-menu-static-demo {
  height: 250px;
  margin-bottom: 20px; }

.rounded-legend {
  padding-top: 11px; }
  .rtl .rounded-legend ul {
    padding-right: 0; }
  .rounded-legend ul li {
    list-style-type: none;
    color: #6c7293;
    font-size: 13px; }
    .rounded-legend ul li .legend-dots {
      width: 6px;
      height: 6px;
      border-radius: 100%;
      display: inline-block;
      margin-right: .5rem; }
      .rtl .rounded-legend ul li .legend-dots {
        margin-left: .5rem; }
  .rounded-legend.legend-horizontal {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex; }
    .rounded-legend.legend-horizontal ul li {
      display: inline-block;
      margin-right: 1.5rem; }
      .rtl .rounded-legend.legend-horizontal ul li {
        margin-right: auto;
        margin-left: 1.5rem; }
  .rounded-legend.legend-top-right ul {
    float: right; }
    .rtl .rounded-legend.legend-top-right ul {
      float: left; }
  .rounded-legend.legend-vertical ul li {
    margin-top: 4px; }

#proBanner {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  z-index: 9999;
  background: #000; }
  #proBanner .card-body-padding {
    padding-top: .75rem;
    padding-bottom: .75rem;
    padding-left: 2rem;
    padding-right: 2rem; }
    @media (max-width: 766px) {
      #proBanner .card-body-padding {
        padding-left: 1rem;
        padding-right: 1rem; } }
  #proBanner .buy-now-text {
    color: #ffffff; }
    @media (max-width: 766px) {
      #proBanner .buy-now-text {
        font-size: 10px;
        line-height: 1.5; } }
  #proBanner .btn.buy-now-btn, #proBanner .ajax-upload-dragdrop .buy-now-btn.ajax-file-upload, .ajax-upload-dragdrop #proBanner .buy-now-btn.ajax-file-upload {
    background: transparent;
    color: #88b6ff;
    border-radius: 10px;
    padding: 1rem 0;
    border-radius: 4px;
    font-weight: bold;
    font-size: 1rem; }
    @media (max-width: 766px) {
      #proBanner .btn.buy-now-btn, #proBanner .ajax-upload-dragdrop .buy-now-btn.ajax-file-upload, .ajax-upload-dragdrop #proBanner .buy-now-btn.ajax-file-upload {
        min-width: 80px;
        padding: 1rem .5rem;
        font-size: 12px; } }
  #proBanner .btn#bannerClose i, #proBanner .ajax-upload-dragdrop #bannerClose.ajax-file-upload i, .ajax-upload-dragdrop #proBanner #bannerClose.ajax-file-upload i {
    margin-right: 1rem;
    font-size: 1.25rem; }
    @media (max-width: 766px) {
      #proBanner .btn#bannerClose i, #proBanner .ajax-upload-dragdrop #bannerClose.ajax-file-upload i, .ajax-upload-dragdrop #proBanner #bannerClose.ajax-file-upload i {
        font-size: 1rem;
        margin-right: 0; } }
  #proBanner a {
    text-decoration: none; }
    #proBanner a i {
      font-size: 1.25rem; }
      @media (max-width: 766px) {
        #proBanner a i {
          font-size: 1rem; } }

.proBanner-padding-top {
  padding-top: 60px !important; }

/* Dashboard */
.main-panel .content-wrapper .btn-outline-sales {
  height: 35px;
  width: 35px;
  border-radius: 4px;
  border: 2px solid #5e6eed; }
  .main-panel .content-wrapper .btn-outline-sales i {
    color: #5e6eed; }
  .main-panel .content-wrapper .btn-outline-sales.profit {
    border: 2px solid #00cff4; }

.main-panel .content-wrapper .header-right a {
  color: #313131;
  text-decoration: none;
  font-weight: 700; }
  .main-panel .content-wrapper .header-right a:first-child {
    border-right: 2px solid #313131; }
    .rtl .main-panel .content-wrapper .header-right a:first-child {
      border: 0;
      border-left: 2px solid #313131; }
  .main-panel .content-wrapper .header-right a p {
    line-height: 1; }

.main-panel .content-wrapper .header-right .btn-icon-text {
  font-size: 14px;
  background: #00d284;
  padding: 0 19px 0 0;
  border: 0;
  color: #ffffff;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .rtl .main-panel .content-wrapper .header-right .btn-icon-text {
    padding: 0 0 0 19px; }
  .main-panel .content-wrapper .header-right .btn-icon-text i {
    padding: 7px;
    display: inline-block;
    background: #069962;
    margin-right: 15px;
    border-radius: 0;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px; }
    .rtl .main-panel .content-wrapper .header-right .btn-icon-text i {
      margin: 0;
      margin-left: 15px;
      border-radius: 0;
      border-top-right-radius: 4px;
      border-bottom-right-radius: 4px; }

.main-panel .content-wrapper .header-right h4.fs-20, .main-panel .content-wrapper .header-right .fs-20.h4 {
  font-size: 20px; }

.main-panel .content-wrapper .sales-header-right .head-count {
  line-height: 0.5;
  margin-top: 5px; }

.main-panel .content-wrapper .flot-chart {
  height: 216px; }
  .main-panel .content-wrapper .flot-chart .flot-text .flot-x-axis .tickLabel {
    color: #6c7293;
    font-size: 13px; }

.main-panel .content-wrapper .card-img {
  background-image: url("../../images/bg_card.jpg");
  background-size: cover; }

.main-panel .content-wrapper .star-color {
  color: #fdb82c; }

.main-panel .content-wrapper .br-theme-css-stars .br-widget a:after {
  content: "\2605";
  font-size: 15px;
  color: #d2d2d2; }

.main-panel .content-wrapper .br-theme-css-stars .br-widget a.br-selected:after {
  color: #edb867;
  font-size: 15px; }

.main-panel .content-wrapper .card-stat {
  background-image: url("../../images/dashboard/img_4.jpg");
  background-size: cover; }

.main-panel .content-wrapper .flot-bar-wrapper .flot-chart {
  height: 88px;
  width: 107px; }

.main-panel .content-wrapper .color-card-wrapper .card-body {
  position: relative;
  padding-top: 100px; }
  .main-panel .content-wrapper .color-card-wrapper .card-body img.card-top-img {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    right: 0;
    height: 180px;
    -o-object-fit: cover;
    object-fit: cover; }
  .main-panel .content-wrapper .color-card-wrapper .card-body .color-card-outer {
    position: relative;
    z-index: 2; }
    .main-panel .content-wrapper .color-card-wrapper .card-body .color-card-outer .color-card {
      width: 112px;
      height: 128px;
      color: #ffffff;
      padding: 27px 0 0 12px; }
      .rtl .main-panel .content-wrapper .color-card-wrapper .card-body .color-card-outer .color-card {
        padding: 11px 12px 0 0; }
      @media (max-width: 576px) {
        .main-panel .content-wrapper .color-card-wrapper .card-body .color-card-outer .color-card {
          width: 95px;
          height: 94px;
          padding: 8px 0 0 12px; } }
      .main-panel .content-wrapper .color-card-wrapper .card-body .color-card-outer .color-card i {
        font-size: 20px; }
      .main-panel .content-wrapper .color-card-wrapper .card-body .color-card-outer .color-card.primary {
        background: #5e6eed; }

.color-card-wrapper .card-body {
  position: relative;
  padding-top: 100px; }
  .color-card-wrapper .card-body img.card-top-img {
    position: absolute;
    z-index: 1;
    top: 0;
    left: 0;
    right: 0;
    height: 180px;
    -o-object-fit: cover;
    object-fit: cover; }
  .color-card-wrapper .card-body .color-card-outer {
    position: relative;
    z-index: 2; }
    .color-card-wrapper .card-body .color-card-outer .color-card {
      width: 112px;
      height: 128px;
      color: #ffffff;
      padding: 27px 0 0 12px; }
      @media (max-width: 576px) {
        .color-card-wrapper .card-body .color-card-outer .color-card {
          width: 95px;
          height: 94px;
          padding: 8px 0 0 12px; } }
      .color-card-wrapper .card-body .color-card-outer .color-card i {
        font-size: 20px; }
      .color-card-wrapper .card-body .color-card-outer .color-card.primary {
        background: #5e6eed; }

.hexagon {
  height: 26px;
  position: relative; }
  .hexagon .hex-mid {
    height: 26px;
    width: 52px;
    font-size: 20px;
    text-align: center; }
    .hexagon .hex-mid:before, .hexagon .hex-mid:after {
      content: "";
      height: 0px;
      width: 0px;
      position: absolute;
      left: 0; }
    .hexagon .hex-mid:before {
      bottom: 100%; }
    .hexagon .hex-mid:after {
      top: 100%; }

.title-banner {
  background: #0033c4;
  padding: 28px 36px;
  color: #ffffff;
  width: 100%; }
  .title-banner img {
    width: 108px; }

.time-banner {
  padding: 28px 20px; }
  .time-banner i {
    font-size: 30px;
    color: #0033c4; }
  .time-banner p {
    font-size: 12px;
    color: #0033c4; }

.hospital-features .badge {
  position: absolute;
  top: 10px;
  right: 10px;
  padding: 4px;
  font-size: 10px; }

.doctor-list {
  padding: 18px 0;
  border-bottom: 1px solid #e4e9f0; }
  .doctor-list img {
    border-radius: 20px;
    width: 35px;
    height: 35px;
    margin-right: 14px; }

.form-select-arrow {
  min-width: 124px;
  margin-left: 20px;
  height: 30px;
  background: url("../../images/dashboard/hospital/arrow-down.svg") no-repeat 95% 50%;
  background-size: 13px 15px;
  -moz-appearance: none;
  -webkit-appearance: none;
  -webkit-border-radius: 0px;
  appearance: none;
  outline-width: 0;
  font-size: 14px;
  color: #757575; }
  @media (max-width: 991px) {
    .form-select-arrow {
      margin-bottom: 10px;
      margin-left: 0; } }
  .form-select-arrow.lg {
    height: 45px;
    margin-left: 0;
    margin-bottom: 20px; }

.horizontal-legend {
  list-style: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .horizontal-legend li {
    display: inline-block;
    margin-left: 30px;
    font-size: 14px;
    color: #6c7293; }
    .horizontal-legend li span {
      display: inline-block;
      width: 13px;
      height: 13px;
      margin-right: 10px; }

.card.chat-with-doctor {
  background: url("../../images/dashboard/hospital/img_call.png") #c9cef6 no-repeat 90% 100%; }

.search-form {
  position: relative; }
  .rtl .search-form {
    margin-right: 0;
    margin-left: 15px; }
  .search-form i {
    font-size: 20px;
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    color: #030303; }
    .rtl .search-form i {
      left: auto;
      right: 0; }
  .search-form input {
    background-color: transparent;
    border: none;
    cursor: pointer;
    width: 0;
    height: 35px;
    padding: 0 0 0 20px;
    position: relative;
    -webkit-transition: width 400ms ease, background 400ms ease;
    transition: width 400ms ease, background 400ms ease; }
    .search-form input:focus {
      background-color: transparent;
      border-bottom: 1px solid #e4e9f0;
      border-radius: 0;
      padding-left: 30px;
      cursor: text;
      outline: 0;
      width: 140px; }
      .rtl .search-form input:focus {
        padding-right: 30px;
        padding-left: 0; }

.hr-banner img {
  width: 125px; }

.close-hr-banner {
  position: absolute;
  top: 20px;
  right: 20px;
  color: #6c7293;
  font-size: 18px; }
  .close-hr-banner:hover {
    color: #030303; }

.rouded-flag {
  font-size: 2.25rem; }

.flag-icon-wrap {
  width: 25px;
  height: 25px;
  border-radius: 100%;
  overflow: hidden;
  margin-right: 10px; }

.filter-banner {
  width: 100%;
  background: url("../../images/dashboard/ecommerce/filterbg.jpg") no-repeat;
  background-size: 100%;
  padding: 30px 50px; }
  @media (max-width: 576px) {
    .filter-banner {
      padding: 20px 30px; } }

.hexagon-primary {
  background: #0033c4;
  color: #ffffff; }
  .hexagon-primary:after {
    border: 26px solid transparent;
    border-top: 13px solid #0033c4; }
  .hexagon-primary:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #0033c4; }

.hexagon-secondary {
  background: #a0a0a0;
  color: #ffffff; }
  .hexagon-secondary:after {
    border: 26px solid transparent;
    border-top: 13px solid #a0a0a0; }
  .hexagon-secondary:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #a0a0a0; }

.hexagon-success {
  background: #00d284;
  color: #ffffff; }
  .hexagon-success:after {
    border: 26px solid transparent;
    border-top: 13px solid #00d284; }
  .hexagon-success:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #00d284; }

.hexagon-info {
  background: #00cff4;
  color: #ffffff; }
  .hexagon-info:after {
    border: 26px solid transparent;
    border-top: 13px solid #00cff4; }
  .hexagon-info:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #00cff4; }

.hexagon-warning {
  background: #ff5730;
  color: #ffffff; }
  .hexagon-warning:after {
    border: 26px solid transparent;
    border-top: 13px solid #ff5730; }
  .hexagon-warning:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #ff5730; }

.hexagon-danger {
  background: #ff0854;
  color: #ffffff; }
  .hexagon-danger:after {
    border: 26px solid transparent;
    border-top: 13px solid #ff0854; }
  .hexagon-danger:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #ff0854; }

.hexagon-light {
  background: #f8f9fa;
  color: #ffffff; }
  .hexagon-light:after {
    border: 26px solid transparent;
    border-top: 13px solid #f8f9fa; }
  .hexagon-light:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #f8f9fa; }

.hexagon-dark {
  background: #3e4b5b;
  color: #ffffff; }
  .hexagon-dark:after {
    border: 26px solid transparent;
    border-top: 13px solid #3e4b5b; }
  .hexagon-dark:before {
    border: 26px solid transparent;
    border-bottom: 13px solid #3e4b5b; }

.badge-primary {
  border: 1px solid #0033c4;
  background: #0033c4;
  color: #ffffff; }

.badge-secondary {
  border: 1px solid #a0a0a0;
  background: #a0a0a0;
  color: #ffffff; }

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  border: 1px solid #00d284;
  background: #00d284;
  color: #ffffff; }

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  border: 1px solid #00cff4;
  background: #00cff4;
  color: #ffffff; }

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  border: 1px solid #ff5730;
  background: #ff5730;
  color: #ffffff; }

.badge-danger {
  border: 1px solid #ff0854;
  background: #ff0854;
  color: #ffffff; }

.badge-light {
  border: 1px solid #f8f9fa;
  background: #f8f9fa;
  color: #ffffff; }

.badge-dark {
  border: 1px solid #3e4b5b;
  background: #3e4b5b;
  color: #ffffff; }

/*-------------------------------------------------------------------*/
/* === Components === */
/* Badges */
.badge {
  border-radius: 4px;
  font-size: 14px;
  font-weight: initial;
  line-height: 1;
  padding: .375rem .5625rem;
  font-family: "Open Sans", sans-serif;
  font-weight: 600; }
  .badge.badge-pill {
    border-radius: 10rem; }

/*Badge variations*/
.badge-primary {
  border: 1px solid #0033c4;
  background: #0033c4;
  color: #ffffff; }

.badge-secondary {
  border: 1px solid #a0a0a0;
  background: #a0a0a0;
  color: #ffffff; }

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  border: 1px solid #00d284;
  background: #00d284;
  color: #ffffff; }

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  border: 1px solid #00cff4;
  background: #00cff4;
  color: #ffffff; }

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  border: 1px solid #ff5730;
  background: #ff5730;
  color: #ffffff; }

.badge-danger {
  border: 1px solid #ff0854;
  background: #ff0854;
  color: #ffffff; }

.badge-light {
  border: 1px solid #f8f9fa;
  background: #f8f9fa;
  color: #ffffff; }

.badge-dark {
  border: 1px solid #3e4b5b;
  background: #3e4b5b;
  color: #ffffff; }

/*Badge outlined variations*/
.badge-outline-primary {
  color: #0033c4;
  border: 1px solid #0033c4; }

.badge-outline-secondary {
  color: #a0a0a0;
  border: 1px solid #a0a0a0; }

.badge-outline-success {
  color: #00d284;
  border: 1px solid #00d284; }

.badge-outline-info {
  color: #00cff4;
  border: 1px solid #00cff4; }

.badge-outline-warning {
  color: #ff5730;
  border: 1px solid #ff5730; }

.badge-outline-danger {
  color: #ff0854;
  border: 1px solid #ff0854; }

.badge-outline-light {
  color: #f8f9fa;
  border: 1px solid #f8f9fa; }

.badge-outline-dark {
  color: #3e4b5b;
  border: 1px solid #3e4b5b; }

/* Buttons */
.btn, .ajax-upload-dragdrop .ajax-file-upload {
  font-size: 12px;
  line-height: 1;
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  /* Buttons with only icons */
  /* Buttons with icon and text */ }
  @media (max-width: 576px) {
    .btn, .ajax-upload-dragdrop .ajax-file-upload {
      font-size: 9px; } }
  .btn i, .ajax-upload-dragdrop .ajax-file-upload i {
    font-size: 20px; }
  .btn.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload {
    border-radius: 50px; }
  .btn.btn-fw, .ajax-upload-dragdrop .btn-fw.ajax-file-upload {
    min-width: 150px; }
  .btn.btn-sm, .btn-group-sm > .btn, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .ajax-upload-dragdrop .btn-sm.ajax-file-upload {
    font-size: 0.875rem; }
  .btn.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .ajax-upload-dragdrop .btn-lg.ajax-file-upload {
    font-size: 0.875rem; }
    @media (max-width: 576px) {
      .btn.btn-lg, .btn-group-lg > .btn, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .ajax-upload-dragdrop .btn-lg.ajax-file-upload {
        font-size: 9px;
        padding: 12px 8px; } }
  .btn.btn-xs, .ajax-upload-dragdrop .btn-xs.ajax-file-upload {
    padding: 0.5rem 0.75rem;
    font-size: 0.625rem; }
  .btn.btn-icon, .ajax-upload-dragdrop .btn-icon.ajax-file-upload {
    width: 42px;
    height: 42px;
    padding: 0; }
  .btn.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend {
    margin-right: .5rem; }
  .btn.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append {
    margin-left: .5rem; }
  .btn.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload {
    width: 50px;
    height: 50px;
    padding: 0; }

.btn-group .btn + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload {
  border-left: 0; }

@media (max-width: 991px) {
  .btn-group .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload {
    padding: 8px 7px; } }

/*social buttons*/
.btn-twitter {
  background: #2caae1;
  color: #ffffff; }
  .btn-twitter:hover, .btn-twitter:focus {
    background: #1b8dbf;
    color: #ffffff; }
  .btn-twitter.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #59bce7; }
    .btn-twitter.btn-social-icon-text i {
      background: #2caae1;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-twitter {
  border: 1px solid #2caae1;
  color: #2caae1; }
  .btn-outline-twitter:hover {
    background: #2caae1;
    color: #ffffff; }

.btn-facebook {
  background: #3b579d;
  color: #ffffff; }
  .btn-facebook:hover, .btn-facebook:focus {
    background: #2d4278;
    color: #ffffff; }
  .btn-facebook.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #4e6ebd; }
    .btn-facebook.btn-social-icon-text i {
      background: #3b579d;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-facebook {
  border: 1px solid #3b579d;
  color: #3b579d; }
  .btn-outline-facebook:hover {
    background: #3b579d;
    color: #ffffff; }

.btn-google {
  background: #dc4a38;
  color: #ffffff; }
  .btn-google:hover, .btn-google:focus {
    background: #bf3322;
    color: #ffffff; }
  .btn-google.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #e47163; }
    .btn-google.btn-social-icon-text i {
      background: #dc4a38;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-google {
  border: 1px solid #dc4a38;
  color: #dc4a38; }
  .btn-outline-google:hover {
    background: #dc4a38;
    color: #ffffff; }

.btn-linkedin {
  background: #0177b5;
  color: #ffffff; }
  .btn-linkedin:hover, .btn-linkedin:focus {
    background: #015682;
    color: #ffffff; }
  .btn-linkedin.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #0198e8; }
    .btn-linkedin.btn-social-icon-text i {
      background: #0177b5;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-linkedin {
  border: 1px solid #0177b5;
  color: #0177b5; }
  .btn-outline-linkedin:hover {
    background: #0177b5;
    color: #ffffff; }

.btn-pinterest {
  background: #cc2127;
  color: #ffffff; }
  .btn-pinterest:hover, .btn-pinterest:focus {
    background: #a01a1f;
    color: #ffffff; }
  .btn-pinterest.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #e04046; }
    .btn-pinterest.btn-social-icon-text i {
      background: #cc2127;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-pinterest {
  border: 1px solid #cc2127;
  color: #cc2127; }
  .btn-outline-pinterest:hover {
    background: #cc2127;
    color: #ffffff; }

.btn-youtube {
  background: #e52d27;
  color: #ffffff; }
  .btn-youtube:hover, .btn-youtube:focus {
    background: #c21d17;
    color: #ffffff; }
  .btn-youtube.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #ea5955; }
    .btn-youtube.btn-social-icon-text i {
      background: #e52d27;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-youtube {
  border: 1px solid #e52d27;
  color: #e52d27; }
  .btn-outline-youtube:hover {
    background: #e52d27;
    color: #ffffff; }

.btn-github {
  background: #333333;
  color: #ffffff; }
  .btn-github:hover, .btn-github:focus {
    background: #1a1a1a;
    color: #ffffff; }
  .btn-github.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #4d4d4d; }
    .btn-github.btn-social-icon-text i {
      background: #333333;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-github {
  border: 1px solid #333333;
  color: #333333; }
  .btn-outline-github:hover {
    background: #333333;
    color: #ffffff; }

.btn-behance {
  background: #1769ff;
  color: #ffffff; }
  .btn-behance:hover, .btn-behance:focus {
    background: #0050e3;
    color: #ffffff; }
  .btn-behance.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #4a8aff; }
    .btn-behance.btn-social-icon-text i {
      background: #1769ff;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-behance {
  border: 1px solid #1769ff;
  color: #1769ff; }
  .btn-outline-behance:hover {
    background: #1769ff;
    color: #ffffff; }

.btn-dribbble {
  background: #ea4c89;
  color: #ffffff; }
  .btn-dribbble:hover, .btn-dribbble:focus {
    background: #e51e6b;
    color: #ffffff; }
  .btn-dribbble.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #ef7aa7; }
    .btn-dribbble.btn-social-icon-text i {
      background: #ea4c89;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  color: #ea4c89; }
  .btn-outline-dribbble:hover {
    background: #ea4c89;
    color: #ffffff; }

.btn-reddit {
  background: #ff4500;
  color: #ffffff; }
  .btn-reddit:hover, .btn-reddit:focus {
    background: #cc3700;
    color: #ffffff; }
  .btn-reddit.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #ff6a33; }
    .btn-reddit.btn-social-icon-text i {
      background: #ff4500;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-reddit {
  border: 1px solid #ff4500;
  color: #ff4500; }
  .btn-outline-reddit:hover {
    background: #ff4500;
    color: #ffffff; }

/* inverse buttons */
.btn-inverse-primary {
  background-color: rgba(0, 51, 196, 0.2);
  background-image: none;
  border-color: rgba(0, 51, 196, 0); }
  .btn-inverse-primary:not(.btn-inverse-light) {
    color: #0033c4; }
  .btn-inverse-primary:hover {
    color: #ffffff;
    background-color: #0033c4;
    border-color: #0033c4; }
  .btn-inverse-primary.focus, .btn-inverse-primary:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(0, 51, 196, 0.5);
    box-shadow: 0 0 0 3px rgba(0, 51, 196, 0.5); }
  .btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
    color: #0033c4;
    background-color: transparent; }
  .btn-inverse-primary.active, .btn-inverse-primary:active,
  .show > .btn-inverse-primary.dropdown-toggle {
    color: #ffffff;
    background-color: #0033c4;
    border-color: #0033c4; }

.btn-primary:not(.btn-light) {
  color: #ffffff; }
  .btn-primary:not(.btn-light):hover, .btn-primary:not(.btn-light):focus, .btn-primary:not(.btn-light):active {
    color: #ffffff; }
  .btn-primary:not(.btn-light):focus, .btn-primary:not(.btn-light):active {
    background: #0033c4;
    border-color: #0033c4; }

.btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active {
  background: theme-color(primary);
  color: #000000; }

.btn-inverse-secondary {
  background-color: rgba(160, 160, 160, 0.2);
  background-image: none;
  border-color: rgba(160, 160, 160, 0); }
  .btn-inverse-secondary:not(.btn-inverse-light) {
    color: #a0a0a0; }
  .btn-inverse-secondary:hover {
    color: #ffffff;
    background-color: #a0a0a0;
    border-color: #a0a0a0; }
  .btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(160, 160, 160, 0.5);
    box-shadow: 0 0 0 3px rgba(160, 160, 160, 0.5); }
  .btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
    color: #a0a0a0;
    background-color: transparent; }
  .btn-inverse-secondary.active, .btn-inverse-secondary:active,
  .show > .btn-inverse-secondary.dropdown-toggle {
    color: #ffffff;
    background-color: #a0a0a0;
    border-color: #a0a0a0; }

.btn-secondary:not(.btn-light) {
  color: #ffffff; }
  .btn-secondary:not(.btn-light):hover, .btn-secondary:not(.btn-light):focus, .btn-secondary:not(.btn-light):active {
    color: #ffffff; }
  .btn-secondary:not(.btn-light):focus, .btn-secondary:not(.btn-light):active {
    background: #a0a0a0;
    border-color: #a0a0a0; }

.btn-outline-secondary:hover, .btn-outline-secondary:focus, .btn-outline-secondary:active {
  background: theme-color(secondary);
  color: #000000; }

.btn-inverse-success {
  background-color: rgba(0, 210, 132, 0.2);
  background-image: none;
  border-color: rgba(0, 210, 132, 0); }
  .btn-inverse-success:not(.btn-inverse-light) {
    color: #00d284; }
  .btn-inverse-success:hover {
    color: #ffffff;
    background-color: #00d284;
    border-color: #00d284; }
  .btn-inverse-success.focus, .btn-inverse-success:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(0, 210, 132, 0.5);
    box-shadow: 0 0 0 3px rgba(0, 210, 132, 0.5); }
  .btn-inverse-success.disabled, .btn-inverse-success:disabled {
    color: #00d284;
    background-color: transparent; }
  .btn-inverse-success.active, .btn-inverse-success:active,
  .show > .btn-inverse-success.dropdown-toggle {
    color: #ffffff;
    background-color: #00d284;
    border-color: #00d284; }

.btn-success:not(.btn-light) {
  color: #ffffff; }
  .btn-success:not(.btn-light):hover, .btn-success:not(.btn-light):focus, .btn-success:not(.btn-light):active {
    color: #ffffff; }
  .btn-success:not(.btn-light):focus, .btn-success:not(.btn-light):active {
    background: #00d284;
    border-color: #00d284; }

.btn-outline-success:hover, .btn-outline-success:focus, .btn-outline-success:active {
  background: theme-color(success);
  color: #000000; }

.btn-inverse-info {
  background-color: rgba(0, 207, 244, 0.2);
  background-image: none;
  border-color: rgba(0, 207, 244, 0); }
  .btn-inverse-info:not(.btn-inverse-light) {
    color: #00cff4; }
  .btn-inverse-info:hover {
    color: #ffffff;
    background-color: #00cff4;
    border-color: #00cff4; }
  .btn-inverse-info.focus, .btn-inverse-info:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(0, 207, 244, 0.5);
    box-shadow: 0 0 0 3px rgba(0, 207, 244, 0.5); }
  .btn-inverse-info.disabled, .btn-inverse-info:disabled {
    color: #00cff4;
    background-color: transparent; }
  .btn-inverse-info.active, .btn-inverse-info:active,
  .show > .btn-inverse-info.dropdown-toggle {
    color: #ffffff;
    background-color: #00cff4;
    border-color: #00cff4; }

.btn-info:not(.btn-light) {
  color: #ffffff; }
  .btn-info:not(.btn-light):hover, .btn-info:not(.btn-light):focus, .btn-info:not(.btn-light):active {
    color: #ffffff; }
  .btn-info:not(.btn-light):focus, .btn-info:not(.btn-light):active {
    background: #00cff4;
    border-color: #00cff4; }

.btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active {
  background: theme-color(info);
  color: #000000; }

.btn-inverse-warning {
  background-color: rgba(255, 87, 48, 0.2);
  background-image: none;
  border-color: rgba(255, 87, 48, 0); }
  .btn-inverse-warning:not(.btn-inverse-light) {
    color: #ff5730; }
  .btn-inverse-warning:hover {
    color: #ffffff;
    background-color: #ff5730;
    border-color: #ff5730; }
  .btn-inverse-warning.focus, .btn-inverse-warning:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(255, 87, 48, 0.5);
    box-shadow: 0 0 0 3px rgba(255, 87, 48, 0.5); }
  .btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
    color: #ff5730;
    background-color: transparent; }
  .btn-inverse-warning.active, .btn-inverse-warning:active,
  .show > .btn-inverse-warning.dropdown-toggle {
    color: #ffffff;
    background-color: #ff5730;
    border-color: #ff5730; }

.btn-warning:not(.btn-light) {
  color: #ffffff; }
  .btn-warning:not(.btn-light):hover, .btn-warning:not(.btn-light):focus, .btn-warning:not(.btn-light):active {
    color: #ffffff; }
  .btn-warning:not(.btn-light):focus, .btn-warning:not(.btn-light):active {
    background: #ff5730;
    border-color: #ff5730; }

.btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active {
  background: theme-color(warning);
  color: #000000; }

.btn-inverse-danger {
  background-color: rgba(255, 8, 84, 0.2);
  background-image: none;
  border-color: rgba(255, 8, 84, 0); }
  .btn-inverse-danger:not(.btn-inverse-light) {
    color: #ff0854; }
  .btn-inverse-danger:hover {
    color: #ffffff;
    background-color: #ff0854;
    border-color: #ff0854; }
  .btn-inverse-danger.focus, .btn-inverse-danger:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(255, 8, 84, 0.5);
    box-shadow: 0 0 0 3px rgba(255, 8, 84, 0.5); }
  .btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
    color: #ff0854;
    background-color: transparent; }
  .btn-inverse-danger.active, .btn-inverse-danger:active,
  .show > .btn-inverse-danger.dropdown-toggle {
    color: #ffffff;
    background-color: #ff0854;
    border-color: #ff0854; }

.btn-danger:not(.btn-light) {
  color: #ffffff; }
  .btn-danger:not(.btn-light):hover, .btn-danger:not(.btn-light):focus, .btn-danger:not(.btn-light):active {
    color: #ffffff; }
  .btn-danger:not(.btn-light):focus, .btn-danger:not(.btn-light):active {
    background: #ff0854;
    border-color: #ff0854; }

.btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active {
  background: theme-color(danger);
  color: #000000; }

.btn-inverse-light {
  background-color: rgba(248, 249, 250, 0.2);
  background-image: none;
  border-color: rgba(248, 249, 250, 0); }
  .btn-inverse-light:not(.btn-inverse-light) {
    color: #f8f9fa; }
  .btn-inverse-light:hover {
    color: #ffffff;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-inverse-light.focus, .btn-inverse-light:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5); }
  .btn-inverse-light.disabled, .btn-inverse-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-inverse-light.active, .btn-inverse-light:active,
  .show > .btn-inverse-light.dropdown-toggle {
    color: #ffffff;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }

.btn-light:not(.btn-light) {
  color: #ffffff; }
  .btn-light:not(.btn-light):hover, .btn-light:not(.btn-light):focus, .btn-light:not(.btn-light):active {
    color: #ffffff; }
  .btn-light:not(.btn-light):focus, .btn-light:not(.btn-light):active {
    background: #f8f9fa;
    border-color: #f8f9fa; }

.btn-outline-light:hover, .btn-outline-light:focus, .btn-outline-light:active {
  background: theme-color(light);
  color: #000000; }

.btn-inverse-dark {
  background-color: rgba(62, 75, 91, 0.2);
  background-image: none;
  border-color: rgba(62, 75, 91, 0); }
  .btn-inverse-dark:not(.btn-inverse-light) {
    color: #3e4b5b; }
  .btn-inverse-dark:hover {
    color: #ffffff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
  .btn-inverse-dark.focus, .btn-inverse-dark:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(62, 75, 91, 0.5);
    box-shadow: 0 0 0 3px rgba(62, 75, 91, 0.5); }
  .btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
    color: #3e4b5b;
    background-color: transparent; }
  .btn-inverse-dark.active, .btn-inverse-dark:active,
  .show > .btn-inverse-dark.dropdown-toggle {
    color: #ffffff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }

.btn-dark:not(.btn-light) {
  color: #ffffff; }
  .btn-dark:not(.btn-light):hover, .btn-dark:not(.btn-light):focus, .btn-dark:not(.btn-light):active {
    color: #ffffff; }
  .btn-dark:not(.btn-light):focus, .btn-dark:not(.btn-light):active {
    background: #3e4b5b;
    border-color: #3e4b5b; }

.btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active {
  background: theme-color(dark);
  color: #000000; }

/* Breadcrumbs */
.breadcrumb {
  border: 1px solid #e4e9f0; }
  .breadcrumb .breadcrumb-item {
    font-size: 0.875rem; }
    .breadcrumb .breadcrumb-item.active {
      color: rgba(3, 3, 3, 0.8); }
  .breadcrumb.breadcrumb-custom {
    padding: 0 0;
    border-color: #dbe3e6; }
    .breadcrumb.breadcrumb-custom .breadcrumb-item {
      font-size: 0.875rem;
      background: #dbe3e6;
      padding: 0.56rem 10px;
      color: #000000;
      display: inline-block;
      vertical-align: top; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item:before {
        content: ""; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item a {
        position: relative;
        color: inherit;
        border: 1px solid #dbe3e6;
        display: inline-block;
        vertical-align: top; }
        .breadcrumb.breadcrumb-custom .breadcrumb-item a:before, .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
          position: absolute;
          top: -9px;
          width: 0;
          height: 0;
          content: "";
          border-top: 21px solid transparent;
          border-bottom: 21px solid transparent; }
        .breadcrumb.breadcrumb-custom .breadcrumb-item a:before {
          right: -22px;
          z-index: 3;
          border-left-color: #dbe3e6;
          border-left-style: solid;
          border-left-width: 12px; }
        .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
          border-top: 21px solid transparent;
          border-bottom: 22px solid transparent;
          border-left: 12px solid #ffffff;
          top: -9px;
          right: -23px; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item span {
        display: inline-block;
        vertical-align: top; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item.active {
        color: rgba(3, 3, 3, 0.8); }
  .breadcrumb.bg-success, .settings-panel .color-tiles .breadcrumb.tiles.success, .breadcrumb.bg-dark, .settings-panel .color-tiles .breadcrumb.tiles.dark, .breadcrumb.bg-danger, .settings-panel .color-tiles .breadcrumb.tiles.danger, .breadcrumb.bg-warning, .settings-panel .color-tiles .breadcrumb.tiles.warning, .breadcrumb.bg-primary, .settings-panel .color-tiles .breadcrumb.tiles.primary, #theme-settings .breadcrumb.settings-close, .breadcrumb.bg-info, .settings-panel .color-tiles .breadcrumb.tiles.info {
    border: none; }
    .breadcrumb.bg-success .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item, .breadcrumb.bg-dark .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item, .breadcrumb.bg-danger .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item, .breadcrumb.bg-warning .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item, .breadcrumb.bg-primary .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item, #theme-settings .breadcrumb.settings-close .breadcrumb-item, .breadcrumb.bg-info .breadcrumb-item, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item {
      color: #ffffff; }
      .breadcrumb.bg-success .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item:before, .breadcrumb.bg-dark .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item:before, .breadcrumb.bg-danger .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item:before, .breadcrumb.bg-warning .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item:before, .breadcrumb.bg-primary .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item:before, #theme-settings .breadcrumb.settings-close .breadcrumb-item:before, .breadcrumb.bg-info .breadcrumb-item:before, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item:before {
        color: inherit; }
      .breadcrumb.bg-success .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item a, .breadcrumb.bg-success .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.success .breadcrumb-item span, .breadcrumb.bg-dark .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item a, .breadcrumb.bg-dark .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.dark .breadcrumb-item span, .breadcrumb.bg-danger .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item a, .breadcrumb.bg-danger .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.danger .breadcrumb-item span, .breadcrumb.bg-warning .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item a, .breadcrumb.bg-warning .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.warning .breadcrumb-item span, .breadcrumb.bg-primary .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item a, #theme-settings .breadcrumb.settings-close .breadcrumb-item a, .breadcrumb.bg-primary .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.primary .breadcrumb-item span, #theme-settings .breadcrumb.settings-close .breadcrumb-item span, .breadcrumb.bg-info .breadcrumb-item a, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item a, .breadcrumb.bg-info .breadcrumb-item span, .settings-panel .color-tiles .breadcrumb.tiles.info .breadcrumb-item span {
        color: inherit; }

/* inverse breadcrumb */
.bg-inverse-primary, .image-grouped .text-avatar {
  background: #4575ff;
  border-color: #0033c4; }
  .bg-inverse-primary .breadcrumb-item, .image-grouped .text-avatar .breadcrumb-item {
    color: #0033c4; }
    .bg-inverse-primary .breadcrumb-item:before, .image-grouped .text-avatar .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-primary .breadcrumb-item a, .image-grouped .text-avatar .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-primary.breadcrumb-custom, .image-grouped .breadcrumb-custom.text-avatar {
    background: transparent; }
    .bg-inverse-primary.breadcrumb-custom .breadcrumb-item, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item {
      background: #4575ff; }
      .bg-inverse-primary.breadcrumb-custom .breadcrumb-item a, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item a {
        color: #0033c4;
        border: none; }
        .bg-inverse-primary.breadcrumb-custom .breadcrumb-item a:before, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item a:before {
          border-left-color: #4575ff; }
      .bg-inverse-primary.breadcrumb-custom .breadcrumb-item span, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item span {
        color: #0033c4; }
      .bg-inverse-primary.breadcrumb-custom .breadcrumb-item:last-child, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-secondary {
  background: #e0e0e0;
  border-color: #a0a0a0; }
  .bg-inverse-secondary .breadcrumb-item {
    color: #a0a0a0; }
    .bg-inverse-secondary .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-secondary .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-secondary.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item {
      background: #e0e0e0; }
      .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a {
        color: #a0a0a0;
        border: none; }
        .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #e0e0e0; }
      .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item span {
        color: #a0a0a0; }
      .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-success {
  background: #53ffbf;
  border-color: #00d284; }
  .bg-inverse-success .breadcrumb-item {
    color: #00d284; }
    .bg-inverse-success .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-success .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-success.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-success.breadcrumb-custom .breadcrumb-item {
      background: #53ffbf; }
      .bg-inverse-success.breadcrumb-custom .breadcrumb-item a {
        color: #00d284;
        border: none; }
        .bg-inverse-success.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #53ffbf; }
      .bg-inverse-success.breadcrumb-custom .breadcrumb-item span {
        color: #00d284; }
      .bg-inverse-success.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-info {
  background: #75eaff;
  border-color: #00cff4; }
  .bg-inverse-info .breadcrumb-item {
    color: #00cff4; }
    .bg-inverse-info .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-info .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-info.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-info.breadcrumb-custom .breadcrumb-item {
      background: #75eaff; }
      .bg-inverse-info.breadcrumb-custom .breadcrumb-item a {
        color: #00cff4;
        border: none; }
        .bg-inverse-info.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #75eaff; }
      .bg-inverse-info.breadcrumb-custom .breadcrumb-item span {
        color: #00cff4; }
      .bg-inverse-info.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-warning {
  background: #ffbeb0;
  border-color: #ff5730; }
  .bg-inverse-warning .breadcrumb-item {
    color: #ff5730; }
    .bg-inverse-warning .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-warning .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-warning.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-warning.breadcrumb-custom .breadcrumb-item {
      background: #ffbeb0; }
      .bg-inverse-warning.breadcrumb-custom .breadcrumb-item a {
        color: #ff5730;
        border: none; }
        .bg-inverse-warning.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #ffbeb0; }
      .bg-inverse-warning.breadcrumb-custom .breadcrumb-item span {
        color: #ff5730; }
      .bg-inverse-warning.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-danger {
  background: #ff88ac;
  border-color: #ff0854; }
  .bg-inverse-danger .breadcrumb-item {
    color: #ff0854; }
    .bg-inverse-danger .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-danger .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-danger.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-danger.breadcrumb-custom .breadcrumb-item {
      background: #ff88ac; }
      .bg-inverse-danger.breadcrumb-custom .breadcrumb-item a {
        color: #ff0854;
        border: none; }
        .bg-inverse-danger.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #ff88ac; }
      .bg-inverse-danger.breadcrumb-custom .breadcrumb-item span {
        color: #ff0854; }
      .bg-inverse-danger.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-light {
  background: white;
  border-color: #f8f9fa; }
  .bg-inverse-light .breadcrumb-item {
    color: #f8f9fa; }
    .bg-inverse-light .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-light .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-light.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-light.breadcrumb-custom .breadcrumb-item {
      background: white; }
      .bg-inverse-light.breadcrumb-custom .breadcrumb-item a {
        color: #f8f9fa;
        border: none; }
        .bg-inverse-light.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: white; }
      .bg-inverse-light.breadcrumb-custom .breadcrumb-item span {
        color: #f8f9fa; }
      .bg-inverse-light.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-dark {
  background: #778aa2;
  border-color: #3e4b5b; }
  .bg-inverse-dark .breadcrumb-item {
    color: #3e4b5b; }
    .bg-inverse-dark .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-dark .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-dark.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-dark.breadcrumb-custom .breadcrumb-item {
      background: #778aa2; }
      .bg-inverse-dark.breadcrumb-custom .breadcrumb-item a {
        color: #3e4b5b;
        border: none; }
        .bg-inverse-dark.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #778aa2; }
      .bg-inverse-dark.breadcrumb-custom .breadcrumb-item span {
        color: #3e4b5b; }
      .bg-inverse-dark.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

/* Cards */
.card {
  border: 0;
  background: #fff;
  border: 1px solid #e4e9f0; }
  .card .card-body {
    padding: 30px 28px; }
    .card .card-body + .card-body {
      padding-top: 1rem; }
  .card .card-title {
    color: #313131;
    margin-bottom: 0.75rem;
    text-transform: capitalize;
    font-family: "Open Sans", sans-serif;
    font-weight: 700;
    font-size: 16px; }
  .card .card-subtitle {
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    margin-top: 0.625rem;
    margin-bottom: 0.625rem; }
  .card .card-description {
    color: #76838f;
    margin-bottom: 1.5rem;
    font-family: "Open Sans", sans-serif;
    font-weight: 400; }
  .card.card-outline-success {
    border: 1px solid theme-color("success"); }
  .card.card-outline-primary {
    border: 1px solid theme-color("primary"); }
  .card.card-outline-warning {
    border: 1px solid theme-color("warning"); }
  .card.card-outline-danger {
    border: 1px solid theme-color("danger"); }
  .card.card-rounded {
    border-radius: 5px; }
  .card.card-faded {
    background: #b5b0b2;
    border-color: #b5b0b2; }
  .card.card-circle-progress {
    color: #ffffff;
    text-align: center; }
  .card.card-no-shadow {
    -webkit-box-shadow: none;
    box-shadow: none; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%;
      margin-bottom: 0.75rem; } }

.card-inverse-primary {
  background: rgba(0, 51, 196, 0.2);
  border: 1px solid theme-color-level(#0033c4, 1);
  color: theme-color-level(#0033c4, 3); }

.card-inverse-secondary {
  background: rgba(160, 160, 160, 0.2);
  border: 1px solid theme-color-level(#a0a0a0, 1);
  color: theme-color-level(#a0a0a0, 3); }

.card-inverse-success {
  background: rgba(0, 210, 132, 0.2);
  border: 1px solid theme-color-level(#00d284, 1);
  color: theme-color-level(#00d284, 3); }

.card-inverse-info {
  background: rgba(0, 207, 244, 0.2);
  border: 1px solid theme-color-level(#00cff4, 1);
  color: theme-color-level(#00cff4, 3); }

.card-inverse-warning {
  background: rgba(255, 87, 48, 0.2);
  border: 1px solid theme-color-level(#ff5730, 1);
  color: theme-color-level(#ff5730, 3); }

.card-inverse-danger {
  background: rgba(255, 8, 84, 0.2);
  border: 1px solid theme-color-level(#ff0854, 1);
  color: theme-color-level(#ff0854, 3); }

.card-inverse-light {
  background: rgba(248, 249, 250, 0.2);
  border: 1px solid theme-color-level(#f8f9fa, 1);
  color: theme-color-level(#f8f9fa, 3); }

.card-inverse-dark {
  background: rgba(62, 75, 91, 0.2);
  border: 1px solid theme-color-level(#3e4b5b, 1);
  color: theme-color-level(#3e4b5b, 3); }

/* Checkboxes and Radios */
.form-check {
  position: relative;
  display: block;
  margin-top: 7px;
  margin-bottom: 10px;
  padding-left: 0; }
  .form-check .form-check-label {
    display: block;
    margin-left: 24px;
    font-size: 0.875rem;
    line-height: 1.5; }
    .rtl .form-check .form-check-label {
      margin-left: 0;
      margin-right: 1.75rem; }
    .form-check .form-check-label input {
      position: absolute;
      top: 0;
      left: 0;
      margin-left: 0;
      margin-top: 0;
      z-index: 1;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0); }
      .rtl .form-check .form-check-label input {
        left: auto;
        right: 0; }
    .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
      position: absolute;
      top: 0;
      left: 0; }
      .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
        left: auto;
        right: 0; }
    .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
      content: "";
      width: 17px;
      height: 17px;
      border-radius: 2px;
      border: solid #5e6eed;
      border-width: 2px;
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms; }
    .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms;
      font-family: Material Design Icons;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transform: scale(0);
      transform: scale(0);
      content: '\F12C';
      font-size: .9375rem;
      font-weight: bold;
      color: #ffffff; }
    .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
      background: #5e6eed;
      border-width: 0; }
    .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
      width: 18px;
      opacity: 1;
      line-height: 18px;
      filter: alpha(opacity=100);
      -webkit-transform: scale(1);
      transform: scale(1); }
    .form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
      border-color: #e4e9f0; }
    .form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
      background: #e4e9f0;
      color: #ffffff; }
    .form-check .form-check-label input[type="radio"] + .input-helper:before {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      border: solid #0033c4;
      border-width: 2px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms; }
      .rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
        left: auto;
        right: 0; }
    .form-check .form-check-label input[type="radio"] + .input-helper:after {
      content: "";
      width: 8px;
      height: 8px;
      background: #ffffff;
      border-radius: 50%;
      top: 6px;
      left: 6px;
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transform: scale(0);
      transform: scale(0);
      position: absolute; }
      .rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
        left: auto;
        right: 6px; }
    .form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
      background: #0033c4;
      border-width: 0; }
    .form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
      opacity: 1;
      line-height: 1.5;
      filter: alpha(opacity=100);
      -webkit-transform: scale(1);
      transform: scale(1); }
    .form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
      border-color: #e4e9f0; }
    .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
      background: #e4e9f0; }
    .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
      background: #ffffff; }

/* Dropdowns */
.dropdown .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font: normal normal normal 24px/1 "Material Design Icons";
  content: "\f140";
  width: auto;
  height: auto;
  vertical-align: baseline;
  font-size: .75rem; }

.dropdown .dropdown-menu {
  margin-top: .75rem;
  font-size: 0.875rem;
  -webkit-box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35); }
  .dropdown .dropdown-menu .dropdown-item {
    font-size: 1rem;
    padding: .25rem 1.5rem; }
    .dropdown .dropdown-menu .dropdown-item:active {
      background: initial; }
    .dropdown .dropdown-menu .dropdown-item:hover {
      background-color: #6c7293;
      color: #ffffff; }

/* Forms */
.form-group {
  margin-bottom: 1.5rem; }

.input-group-append,
.input-group-prepend {
  color: #c9c8c8;
  width: auto;
  border: none; }
  .input-group-append .input-group-text,
  .input-group-prepend .input-group-text {
    border-color: #e4e9f0;
    padding: 0.94rem 0.75rem;
    color: #c9c8c8; }

.form-control, .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  border: 1px solid #e4e9f0;
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  font-size: 0.8125rem; }
  .form-control:focus, .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
  .tt-query:focus,
  .tt-hint:focus {
    background-color: #ffffff;
    color: #000000;
    outline: none; }

select.form-control, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
select.tt-query,
select.tt-hint {
  padding: .4375rem .75rem;
  border: 0;
  outline: 1px solid #e4e9f0;
  color: #c9c8c8; }
  select.form-control:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
  select.tt-query:focus,
  select.tt-hint:focus {
    outline: 1px solid #e4e9f0; }
  select.form-control.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
  select.border-primary.tt-query,
  select.border-primary.tt-hint {
    outline: 1px solid #0033c4; }
    select.form-control.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
    select.border-primary.tt-query:focus,
    select.border-primary.tt-hint:focus {
      outline: 1px solid #0033c4; }
  select.form-control.border-secondary, select.form-control.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
  select.loader-demo-box.tt-query,
  select.loader-demo-box.tt-hint, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
  select.border-secondary.tt-query,
  select.border-secondary.tt-hint {
    outline: 1px solid #a0a0a0; }
    select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
    select.loader-demo-box.tt-query:focus,
    select.loader-demo-box.tt-hint:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
    select.border-secondary.tt-query:focus,
    select.border-secondary.tt-hint:focus {
      outline: 1px solid #a0a0a0; }
  select.form-control.border-success, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .select2-selection--single select.border-success.select2-search__field, select.border-success.typeahead,
  select.border-success.tt-query,
  select.border-success.tt-hint {
    outline: 1px solid #00d284; }
    select.form-control.border-success:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, select.border-success.typeahead:focus,
    select.border-success.tt-query:focus,
    select.border-success.tt-hint:focus {
      outline: 1px solid #00d284; }
  select.form-control.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
  select.border-info.tt-query,
  select.border-info.tt-hint {
    outline: 1px solid #00cff4; }
    select.form-control.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
    select.border-info.tt-query:focus,
    select.border-info.tt-hint:focus {
      outline: 1px solid #00cff4; }
  select.form-control.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
  select.border-warning.tt-query,
  select.border-warning.tt-hint {
    outline: 1px solid #ff5730; }
    select.form-control.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
    select.border-warning.tt-query:focus,
    select.border-warning.tt-hint:focus {
      outline: 1px solid #ff5730; }
  select.form-control.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
  select.border-danger.tt-query,
  select.border-danger.tt-hint {
    outline: 1px solid #ff0854; }
    select.form-control.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
    select.border-danger.tt-query:focus,
    select.border-danger.tt-hint:focus {
      outline: 1px solid #ff0854; }
  select.form-control.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
  select.border-light.tt-query,
  select.border-light.tt-hint {
    outline: 1px solid #f8f9fa; }
    select.form-control.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
    select.border-light.tt-query:focus,
    select.border-light.tt-hint:focus {
      outline: 1px solid #f8f9fa; }
  select.form-control.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
  select.border-dark.tt-query,
  select.border-dark.tt-hint {
    outline: 1px solid #3e4b5b; }
    select.form-control.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
    select.border-dark.tt-query:focus,
    select.border-dark.tt-hint:focus {
      outline: 1px solid #3e4b5b; }

.form-group label {
  font-size: 0.875rem;
  line-height: 1;
  vertical-align: top;
  margin-bottom: .5rem; }

.form-group.has-danger .form-control, .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead,
.form-group.has-danger .tt-query,
.form-group.has-danger .tt-hint {
  border-color: #ff0854; }

.form-group .file-upload-default {
  visibility: hidden;
  position: absolute; }

.form-group .file-upload-info {
  background: transparent; }

/* Icons */
.icons-list {
  border-left: 1px solid #e4e9f0;
  border-top: 1px solid #e4e9f0; }
  .icons-list > div {
    border-bottom: 1px solid #e4e9f0;
    border-right: 1px solid #e4e9f0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 15px 15px;
    font-family: "Open Sans", sans-serif;
    font-weight: 400;
    font-size: 0.875rem; }
    .icons-list > div i {
      display: inline-block;
      font-size: 20px;
      width: 40px;
      text-align: left;
      color: #0033c4; }

/* Loaders */
#pgloading {
  position: static; }
  #pgloading .bokeh {
    font-size: 100px;
    width: 1em;
    height: 1em;
    position: relative;
    margin: 0 auto;
    border-radius: 50%;
    border: 0.01em solid #e4e9f0;
    list-style: none;
    padding: 0; }
    #pgloading .bokeh li {
      position: absolute;
      width: .2em;
      height: .2em;
      border-radius: 50%; }
      #pgloading .bokeh li:nth-child(1) {
        left: 50%;
        top: 0;
        margin: 0 0 0 -.1em;
        background: #00d284;
        -webkit-transform-origin: 50% 250%;
        transform-origin: 50% 250%;
        -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
        animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate; }
      #pgloading .bokeh li:nth-child(2) {
        top: 50%;
        right: 0;
        margin: -.1em 0 0 0;
        background: #ff0854;
        -webkit-transform-origin: -150% 50%;
        transform-origin: -150% 50%;
        -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
        animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate; }
      #pgloading .bokeh li:nth-child(3) {
        left: 50%;
        bottom: 0;
        margin: 0 0 0 -.1em;
        background: #ff5730;
        -webkit-transform-origin: 50% -150%;
        transform-origin: 50% -150%;
        -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
        animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate; }
      #pgloading .bokeh li:nth-child(4) {
        top: 50%;
        left: 0;
        margin: -.1em 0 0 0;
        background: #0033c4;
        -webkit-transform-origin: 250% 50%;
        transform-origin: 250% 50%;
        -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
        animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate; }

@-webkit-keyframes rota {
  from { }
  to {
    -webkit-transform: rotate(360deg); } }

@keyframes rota {
  from { }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes opa {
  0% { }
  12.0% {
    opacity: 0.80; }
  19.5% {
    opacity: 0.88; }
  37.2% {
    opacity: 0.64; }
  40.5% {
    opacity: 0.52; }
  52.7% {
    opacity: 0.69; }
  60.2% {
    opacity: 0.60; }
  66.6% {
    opacity: 0.52; }
  70.0% {
    opacity: 0.63; }
  79.9% {
    opacity: 0.60; }
  84.2% {
    opacity: 0.75; }
  91.0% {
    opacity: 0.87; } }

@keyframes opa {
  0% { }
  12.0% {
    opacity: 0.80; }
  19.5% {
    opacity: 0.88; }
  37.2% {
    opacity: 0.64; }
  40.5% {
    opacity: 0.52; }
  52.7% {
    opacity: 0.69; }
  60.2% {
    opacity: 0.60; }
  66.6% {
    opacity: 0.52; }
  70.0% {
    opacity: 0.63; }
  79.9% {
    opacity: 0.60; }
  84.2% {
    opacity: 0.75; }
  91.0% {
    opacity: 0.87; } }

.glowing-loader {
  position: relative; }

.s2 {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 50px;
  background-color: transparent;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%); }

.s1 {
  position: absolute;
  height: 70px;
  width: 70px;
  left: 50%;
  top: 50px;
  -webkit-transform-origin: center;
  transform-origin: center;
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
  transform: translate(-50%, -50%) rotate(45deg);
  background-color: transparent; }

.bigcon {
  position: absolute;
  height: 75px;
  width: 75px;
  left: 50%;
  top: 50px;
  -webkit-transform-origin: center;
  transform-origin: center;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
  transform: translate(-50%, -50%) rotate(-45deg);
  background-color: transparent;
  -webkit-animation: bigcon 2s infinite linear;
  animation: bigcon 2s infinite linear;
  -webkit-animation-delay: 0.25s;
  animation-delay: 0.25s; }

.b {
  border-radius: 50%;
  position: absolute; }

.s {
  width: 15px;
  height: 15px;
  -webkit-animation: small 2s infinite ease;
  animation: small 2s infinite ease;
  -webkit-box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  background-color: #0033c4; }

.s:nth-child(1) {
  top: 0%;
  left: 0%; }

.s:nth-child(2) {
  top: 0%;
  right: 0%; }

.s:nth-child(3) {
  right: 0%;
  bottom: 0%; }

.s:nth-child(4) {
  bottom: 0%;
  left: 0%; }

.big {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  -webkit-box-shadow: 0px 0px 10px theme-color(primary), 0px 0px 20px theme-color(primary), 0px 0px 30px theme-color(primary), 0px 0px 50px theme-color(primary), 0px 0px 60px theme-color(primary);
  box-shadow: 0px 0px 10px theme-color(primary), 0px 0px 20px theme-color(primary), 0px 0px 30px theme-color(primary), 0px 0px 50px theme-color(primary), 0px 0px 60px theme-color(primary);
  z-index: 1;
  background-color: #0033c4;
  -webkit-animation: bigball 1s infinite linear;
  animation: bigball 1s infinite linear; }

.sb1 {
  -webkit-animation-delay: -1.75s;
  animation-delay: -1.75s; }

.sb6 {
  -webkit-animation-delay: -1.5s;
  animation-delay: -1.5s; }

.sb2 {
  -webkit-animation-delay: -1.25s;
  animation-delay: -1.25s; }

.sb7 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s; }

.sb3 {
  -webkit-animation-delay: -0.75s;
  animation-delay: -0.75s; }

.sb8 {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s; }

.sb4 {
  -webkit-animation-delay: -0.25s;
  animation-delay: -0.25s; }

.sb5 {
  -webkit-animation-delay: -0s;
  animation-delay: -0s; }

@-webkit-keyframes bigcon {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg); }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(405deg);
    transform: translate(-50%, -50%) rotate(405deg); } }

@keyframes bigcon {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg); }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(405deg);
    transform: translate(-50%, -50%) rotate(405deg); } }

@-webkit-keyframes small {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #2b62ff; }
  10% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
    background-color: #0033c4; }
  15% {
    -webkit-transform: scale(1);
    transform: scale(1); }
  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #0033c4; }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #0033c4; } }

@keyframes small {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #2b62ff; }
  10% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
    background-color: #0033c4; }
  15% {
    -webkit-transform: scale(1);
    transform: scale(1); }
  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #0033c4; }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #0033c4; } }

/* Pixel loader */
.pixel-loader {
  width: 10px;
  height: 10px;
  background: #ff5730;
  color: #ff5730;
  margin: 80px auto;
  -webkit-box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  -webkit-animation: anim 2s linear infinite;
  animation: anim 2s linear infinite; }

@-webkit-keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg); }
  50% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  75% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg); } }

@keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg); }
  50% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  75% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg); } }

/* Square box loader */
@-webkit-keyframes dyinglight {
  15% {
    -webkit-transform: scale(1.6);
    transform: scale(1.6); }
  50% {
    -webkit-transform: rotate(-89deg);
    transform: rotate(-89deg); }
  100% {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg); } }
@keyframes dyinglight {
  15% {
    -webkit-transform: scale(1.6);
    transform: scale(1.6); }
  50% {
    -webkit-transform: rotate(-89deg);
    transform: rotate(-89deg); }
  100% {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg); } }

.square-box-loader {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: inline-block; }

.square-box-loader-square {
  display: block;
  width: 30px;
  height: 30px;
  background: #0033c4; }

.square-box-loader-container {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  -webkit-transform-origin: 50% 50% 0;
  transform-origin: 50% 50% 0;
  -webkit-animation: dyinglight 1s ease infinite;
  animation: dyinglight 1s ease infinite;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden; }

.square-box-loader-corner-top:before,
.square-box-loader-corner-top:after,
.square-box-loader-corner-bottom:before,
.square-box-loader-corner-bottom:after {
  position: absolute;
  width: 10px;
  height: 10px;
  color: #0033c4;
  content: ''; }

.square-box-loader-corner-top:before {
  border-left: 1px solid;
  border-top: 1px solid;
  top: -4px;
  left: -4px; }

.square-box-loader-corner-top:after {
  border-right: 1px solid;
  border-top: 1px solid;
  top: -4px;
  right: -4px; }

.square-box-loader-corner-bottom:before {
  border-left: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  left: -4px; }

.square-box-loader-corner-bottom:after {
  border-right: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  right: -4px; }

/* Circle loader */
.circle-loader {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.circle-loader:before, .circle-loader:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #ff5730; }

.circle-loader:before {
  z-index: 100;
  -webkit-animation: spin 1s infinite;
  animation: spin 1s infinite; }

.circle-loader:after {
  border: 10px solid #a0a0a0; }

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

/* Jumping dots loader */
.jumping-dots-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.jumping-dots-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: rgba(255, 8, 84, 0.8);
  margin: 35px 5px; }

.jumping-dots-loader span:nth-child(1) {
  -webkit-animation: bounce 1s ease-in-out infinite;
  animation: bounce 1s ease-in-out infinite; }

.jumping-dots-loader span:nth-child(2) {
  -webkit-animation: bounce 1s ease-in-out 0.33s infinite;
  animation: bounce 1s ease-in-out 0.33s infinite; }

.jumping-dots-loader span:nth-child(3) {
  -webkit-animation: bounce 1s ease-in-out 0.66s infinite;
  animation: bounce 1s ease-in-out 0.66s infinite; }

@keyframes bounce {
  0%, 75%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  25% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px); } }

/* Bar loader */
.bar-loader {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.bar-loader span {
  display: inline-block;
  width: 5px;
  height: 30px;
  background-color: rgba(255, 8, 84, 0.7); }

.bar-loader span:nth-child(1) {
  -webkit-animation: grow 1s ease-in-out infinite;
  animation: grow 1s ease-in-out infinite; }

.bar-loader span:nth-child(2) {
  -webkit-animation: grow 1s ease-in-out 0.15s infinite;
  animation: grow 1s ease-in-out 0.15s infinite; }

.bar-loader span:nth-child(3) {
  -webkit-animation: grow 1s ease-in-out 0.30s infinite;
  animation: grow 1s ease-in-out 0.30s infinite; }

.bar-loader span:nth-child(4) {
  -webkit-animation: grow 1s ease-in-out 0.45s infinite;
  animation: grow 1s ease-in-out 0.45s infinite; }

@-webkit-keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }
  50% {
    -webkit-transform: scaleY(1.8);
    transform: scaleY(1.8); } }

@keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }
  50% {
    -webkit-transform: scaleY(1.8);
    transform: scaleY(1.8); } }

/* Square path loader */
.square-path-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.square-path-loader:before, .square-path-loader:after {
  content: "";
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: calc(50% - 10px);
  background-color: rgba(0, 210, 132, 0.7);
  -webkit-animation: squaremove 1s ease-in-out infinite;
  animation: squaremove 1s ease-in-out infinite; }

.square-path-loader:after {
  bottom: 0;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s; }

@-webkit-keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0); }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg); }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg); }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg); } }

@keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0); }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg); }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg); }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg); } }

/* Dot opacity loader */
.dot-opacity-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.dot-opacity-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: #0033c4;
  margin: 35px 5px;
  opacity: 0; }

.dot-opacity-loader span:nth-child(1) {
  -webkit-animation: opacitychange 1s ease-in-out infinite;
  animation: opacitychange 1s ease-in-out infinite; }

.dot-opacity-loader span:nth-child(2) {
  -webkit-animation: opacitychange 1s ease-in-out 0.33s infinite;
  animation: opacitychange 1s ease-in-out 0.33s infinite; }

.dot-opacity-loader span:nth-child(3) {
  -webkit-animation: opacitychange 1s ease-in-out 0.66s infinite;
  animation: opacitychange 1s ease-in-out 0.66s infinite; }

@-webkit-keyframes opacitychange {
  0%, 100% {
    opacity: 0; }
  60% {
    opacity: 1; } }

@keyframes opacitychange {
  0%, 100% {
    opacity: 0; }
  60% {
    opacity: 1; } }

/* Flip square */
.flip-square-loader {
  -webkit-perspective: 120px;
  -ms-perspective: 120px;
  perspective: 120px;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.flip-square-loader:before {
  content: "";
  position: absolute;
  left: 25px;
  top: 25px;
  width: 50px;
  height: 50px;
  background-color: rgba(0, 210, 132, 0.7);
  -webkit-animation: flip 1s infinite;
  animation: flip 1s infinite; }

@keyframes flip {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0); }
  50% {
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg); }
  100% {
    -webkit-transform: rotateY(180deg) rotateX(180deg);
    transform: rotateY(180deg) rotateX(180deg); } }

/* Moving square loader */
.moving-square-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.moving-square-loader:before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  top: calc(50% - 10px);
  left: 0px;
  background-color: rgba(255, 8, 84, 0.7);
  -webkit-animation: rotatemove 1s infinite;
  animation: rotatemove 1s infinite; }

@-webkit-keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px); }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px); } }

@keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px); }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px); } }

/* Lists */
ul,
ol,
dl {
  padding-left: 1rem;
  font-size: 0.875rem; }
  ul li,
  ol li,
  dl li {
    line-height: 1.8; }

.list-ticked,
.list-arrow,
.list-star {
  list-style: none;
  padding: 0; }
  .list-ticked li,
  .list-arrow li,
  .list-star li {
    padding-left: 1.5rem; }
    .list-ticked li:before,
    .list-arrow li:before,
    .list-star li:before {
      font-family: "Material Design Icons";
      margin-left: -1.5rem;
      width: 1.5rem;
      margin-right: .5rem; }

.list-ticked li:before {
  content: '\F12D';
  color: #ff0854; }

.list-arrow li:before {
  content: '\F142';
  color: #00d284; }

.list-star li:before {
  content: '\F4CE';
  color: #ff5730; }

.bullet-list {
  padding-left: 0; }
  .rtl .bullet-list {
    padding-right: 0; }
  .bullet-list li {
    position: relative;
    list-style-type: none;
    padding-left: 25px;
    line-height: 1;
    padding-bottom: 25px; }
    .bullet-list li:before, .bullet-list li:after {
      content: "";
      position: absolute; }
    .bullet-list li:before {
      top: 0;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 100%; }
    .bullet-list li:after {
      width: 11px;
      height: 11px;
      top: 2px;
      left: 2px;
      background: #fff;
      border-radius: 100%; }
    .bullet-list li:nth-child(1):before {
      background: #ff0854; }
    .bullet-list li:nth-child(2):before {
      background: #00cff4; }
    .bullet-list li:nth-child(3):before {
      background: #ff5730; }
    .bullet-list li:nth-child(4):before {
      background: #00d284; }
    .bullet-list li:nth-child(5):before {
      background: #0033c4; }

.bullet-line-list {
  padding-left: 30px;
  margin-bottom: 0;
  position: relative;
  list-style-type: none; }
  .rtl .bullet-line-list {
    padding-right: 0px; }
  .bullet-line-list li {
    position: relative;
    line-height: 1;
    padding-bottom: 10px; }
    .bullet-line-list li:before {
      content: "";
      position: absolute;
      border-radius: 100%;
      width: 12px;
      height: 12px;
      left: -28px;
      top: 6px;
      border: 3px solid #0033c4;
      margin-right: 15px;
      z-index: 2;
      background: color(white); }
    .bullet-line-list li:after {
      content: "";
      border: 1px solid #e4e9f0;
      position: absolute;
      bottom: 0;
      left: -23px;
      height: 100%; }
    .bullet-line-list li:first-child:after {
      content: "";
      height: 80%; }
    .bullet-line-list li:last-child {
      padding-bottom: 0; }
      .bullet-line-list li:last-child:after {
        content: "";
        top: 0;
        height: 30%; }

/* Preview */
.preview-list .preview-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  padding: .75rem 1.5rem;
  font-size: .875rem; }
  .preview-list .preview-item:last-child {
    border-bottom: 0; }
  .preview-list .preview-item:hover {
    background: #e9ecef; }
  .preview-list .preview-item .form-check {
    margin-top: 8px;
    margin-right: 1rem; }
  .preview-list .preview-item .preview-thumbnail {
    color: color(white);
    position: relative; }
    .preview-list .preview-item .preview-thumbnail img,
    .preview-list .preview-item .preview-thumbnail .preview-icon {
      width: 36px;
      height: 36px;
      border-radius: 100%; }
    .preview-list .preview-item .preview-thumbnail .preview-icon {
      padding: 6px;
      text-align: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      .preview-list .preview-item .preview-thumbnail .preview-icon i {
        font-size: 1.125rem;
        margin: 0; }
    .preview-list .preview-item .preview-thumbnail .badge {
      border: 2px solid color(white);
      border-radius: 100%;
      bottom: 5px;
      display: block;
      height: 14px;
      left: -5px;
      padding: 0;
      position: absolute;
      width: 14px; }
  .preview-list .preview-item .preview-item-content {
    line-height: 1;
    padding-left: 15px;
    padding-right: 20px; }
    .preview-list .preview-item .preview-item-content:first-child {
      padding-left: 0; }
    .preview-list .preview-item .preview-item-content p {
      margin-bottom: 10px; }
      .preview-list .preview-item .preview-item-content p .content-category {
        font-family: 'source-sans-pro-semibold', sans-serif;
        padding-right: 15px;
        border-right: 1px solid #e4e9f0; }
    .rtl .preview-list .preview-item .preview-item-content {
      padding-left: 0;
      padding-right: 1rem;
      margin-right: 0;
      margin-left: auto; }
  .preview-list .preview-item .preview-actions {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .preview-list .preview-item .preview-actions i {
      width: 29px;
      color: #e6e9ed;
      height: 29px;
      border: 2px solid #e6e9ed;
      border-radius: 100%;
      padding: 3px 6px;
      display: inline-block; }
      .preview-list .preview-item .preview-actions i:first-child {
        margin-right: 10px; }

.preview-list.comment-preview .preview-item {
  padding: .87rem 0; }
  .preview-list.comment-preview .preview-item:first-child {
    padding-top: 0; }
  .preview-list.comment-preview .preview-item p {
    line-height: 27px; }

.preview-list.bordered .preview-item {
  border-bottom: 1px solid #e4e9f0; }
  .preview-list.bordered .preview-item:last-child {
    border-bottom: 0; }

/* Tables */
.table {
  margin-bottom: 0; }
  .table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    font-weight: initial; }
    .table thead th i {
      margin-left: 0.325rem; }
  .table th,
  .table td {
    vertical-align: middle;
    font-size: 0.875rem;
    line-height: 1;
    white-space: nowrap; }
    .table th img,
    .table td img {
      width: 36px;
      height: 36px;
      border-radius: 100%; }
    .table th .badge,
    .table td .badge {
      margin-bottom: 0; }
  .table.table-borderless {
    border: none; }
    .table.table-borderless tr,
    .table.table-borderless td,
    .table.table-borderless th {
      border: none; }
  .table.apointment-table td img {
    width: 20px;
    height: 20px; }

.custom-table thead th {
  font-weight: 700;
  font-size: 14px;
  background: #f8f9fb; }
  .custom-table thead th:first-child {
    padding-left: 28px; }
    .rtl .custom-table thead th:first-child {
      padding-right: 28px; }

.custom-table thead tr th {
  border: 0; }

.custom-table th,
.custom-table td {
  vertical-align: middle;
  font-size: 0.875rem;
  line-height: 1;
  white-space: nowrap;
  font-weight: 600;
  padding: 12px; }
  .custom-table th img,
  .custom-table td img {
    width: 23px;
    height: 23px;
    border-radius: 0; }

.custom-table td:first-child {
  padding-left: 28px; }
  .rtl .custom-table td:first-child {
    padding-right: 28px; }

.custom-table tbody tr {
  border-bottom: 1px solid #e4e9f0; }
  .custom-table tbody tr:first-child td {
    border: 0; }

.table > :not(:last-child) > :last-child > *, .jsgrid .jsgrid-table > :not(:last-child) > :last-child > * {
  border-bottom-color: #e4e9f0; }

.table > :not(:first-child), .jsgrid .jsgrid-table > :not(:first-child) {
  border-top: none; }

/*-------------------------------------------------------------------*/
/*-------------------------------------------------------------------*/
/* === Plugin overrides === */
/* Flot chart */
.flot-chart-container {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  min-height: 300px;
  max-height: 100%; }

.flot-chart {
  width: 100%;
  position: relative;
  max-width: none;
  height: 400px; }
  .flot-chart canvas {
    position: absolute;
    top: 0;
    bottom: 0; }

/* Jquery File Upload */
.ajax-upload-dragdrop {
  border-color: #e4e9f0;
  border-style: dotted;
  max-width: 100%; }
  .ajax-upload-dragdrop span b {
    font-size: .8125rem;
    color: #030303;
    font-weight: initial; }
  .ajax-upload-dragdrop .ajax-file-upload {
    background: #00cff4;
    -webkit-box-shadow: none;
    box-shadow: none;
    height: auto; }

.ajax-file-upload-container {
  min-height: 100px; }
  .ajax-file-upload-container .ajax-file-upload-statusbar {
    max-width: 100%; }

/* Pws-tabs */
.pws_tabs_container ul.pws_tabs_controll {
  border-bottom: 1px solid #0033c4; }
  .pws_tabs_container ul.pws_tabs_controll li:first-child a {
    border-radius: 5px 0px 0px 0px; }
  .pws_tabs_container ul.pws_tabs_controll li:last-child a {
    border-right: 1px solid #0033c4;
    border-radius: 0px 5px 0px 0px; }
  .pws_tabs_container ul.pws_tabs_controll li a {
    border: 1px solid #0033c4;
    border-bottom: none;
    border-right: none;
    background: #fff;
    color: #0033c4;
    padding: 0.6em 1.3em;
    margin-right: 0; }
    .pws_tabs_container ul.pws_tabs_controll li a:hover {
      background: #fff;
      color: #0033c4; }
    .pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
      background: #0033c4;
      color: #fff; }

.pws_tabs_container .demo-tabs {
  border: 1px solid #0033c4;
  border-radius: 0px 5px 5px 5px;
  overflow: hidden;
  background: color(white-smoke);
  margin-bottom: 45px;
  padding-top: 3.5rem; }
  .pws_tabs_container .demo-tabs .CodeMirror {
    margin-bottom: 20px; }

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
  border-right: none;
  border-bottom: none; }
  .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
    border-radius: 5px 0px 0px 0px; }
  .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
    border-bottom: 1px solid #0033c4;
    border-radius: 0px 0px 0px 5px;
    border-right: 0px; }
  .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
    border-radius: 0px;
    border: 1px solid #0033c4;
    border-right: none;
    border-bottom: none;
    margin-bottom: 0; }

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
  margin-bottom: 0; }

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
  border-top: 1px solid #0033c4;
  border-right: none;
  border-bottom: none; }
  .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
    border-radius: 0px 0px 0px 5px; }
  .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
    border-radius: 0px 0px 5px 0px;
    border-right: 1px solid #0033c4; }
  .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
    border-radius: 0px;
    border: 1px solid #0033c4;
    border-top: none;
    border-right: none;
    margin-right: 0;
    margin-bottom: 0; }

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
  border-radius: 0px 5px 0px 0px;
  border-right: 1px solid #0033c4; }

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
  border-right: none;
  border-radius: 5px 0px 0px 0px; }

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
  border: 1px solid #0033c4;
  border-bottom: none;
  border-right: none;
  margin-right: 0;
  margin-left: 0; }

/* Select2 */
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: #0033c4; }

.select2-container--default .select2-selection--single,
.select2-container--default .select2-dropdown,
.select2-container--default .select2-selection--multiple {
  border-color: #e4e9f0; }
  .select2-container--default .select2-selection--single .select2-search__field,
  .select2-container--default .select2-dropdown .select2-search__field,
  .select2-container--default .select2-selection--multiple .select2-search__field {
    border-color: #e4e9f0; }

.select2-container--default .select2-selection--single {
  height: auto; }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 14px; }

.select2-container--default .select2-dropdown {
  font-size: .8125rem; }

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #e4e9f0; }

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  color: color(white);
  border: 0;
  border-radius: 3px;
  padding: 6px;
  font-size: .625rem;
  font-family: inherit;
  line-height: 1; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
    color: color(white); }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
    background: #0033c4; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
    background: #00d284; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
    background: #00cff4; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
    background: #ff0854; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
    background: #ff5730; }

/* Typeahead */
.tt-menu,
.gist {
  text-align: left; }

.twitter-typeahead {
  max-width: 100%; }

.typeahead {
  background-color: color(white); }
  .typeahead:focus {
    border-color: #e4e9f0; }

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }

.tt-hint {
  color: color(gray); }

.tt-menu {
  width: 100%;
  margin: 12px 0;
  padding: 8px 0;
  background-color: color(white);
  border: 1px solid #e4e9f0;
  border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); }

.tt-suggestion {
  padding: 3px 20px;
  font-size: inherit; }
  .tt-suggestion:hover {
    cursor: pointer;
    color: color(white);
    background-color: #0033c4; }
  .tt-suggestion .tt-cursor {
    color: color(white);
    background-color: #0033c4; }
  .tt-suggestion p {
    margin: 0; }

/*-------------------------------------------------------------------*/
/* === Landing screens === */
/* Settings Panel */
.settings-panel {
  display: block;
  position: fixed;
  top: 0;
  right: -300px;
  bottom: 0;
  width: 300px;
  height: 100vh;
  min-height: 100%;
  background: #ffffff;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-property: right, box-shadow;
  -webkit-transition-property: right, -webkit-box-shadow;
  transition-property: right, -webkit-box-shadow;
  transition-property: right, box-shadow;
  transition-property: right, box-shadow, -webkit-box-shadow;
  z-index: 9999; }
  .settings-panel .nav-tabs {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    margin: 0;
    border-bottom: none;
    padding: 0; }
    .settings-panel .nav-tabs .nav-item {
      border: none; }
      .settings-panel .nav-tabs .nav-item .nav-link {
        text-align: center;
        border: none;
        background: transparent;
        color: rgba(255, 255, 255, 0.5);
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
        transition-property: color;
        -webkit-transition-property: color;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center; }
        .settings-panel .nav-tabs .nav-item .nav-link.active {
          background: transparent;
          color: #ffffff; }
  .settings-panel .tab-content {
    border: none;
    padding: 20px 0 0px 0; }
    .settings-panel .tab-content .tab-pane.scroll-wrapper {
      position: relative;
      max-height: 100vh;
      height: 100%;
      padding-bottom: 100px; }
  .settings-panel .settings-heading {
    padding: 16px 0 13px 35px;
    font-size: 0.875rem;
    font-family: "Open Sans", sans-serif;
    font-weight: 700;
    line-height: 1;
    color: rgba(0, 0, 0, 0.9);
    opacity: 0.9;
    margin-bottom: 0;
    border-top: 1px solid #e4e9f0;
    border-bottom: 1px solid #e4e9f0; }
    .rtl .settings-panel .settings-heading {
      padding: 16px 35px 13px 0; }
  .rtl .settings-panel small.settings-heading, .rtl .settings-panel .settings-heading.small {
    padding: 16px 0 13px 12px; }
  .settings-panel .sidebar-bg-options {
    padding: 13px 35px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 0.875rem;
    line-height: 1;
    color: #595959;
    background: #ffffff;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
    -webkit-transition-property: background;
    transition-property: background; }
    .settings-panel .sidebar-bg-options.selected {
      background: #e6e9ed; }
  .settings-panel .color-tiles {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 0px 35px 10px 35px;
    padding-top: 15px; }
    .settings-panel .color-tiles .tiles {
      margin: 10px 18px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      .settings-panel .color-tiles .tiles:before {
        content: "";
        width: 0px;
        height: 0px;
        opacity: 0;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 100%;
        border: 0px solid rgba(255, 255, 255, 0.4);
        -webkit-transition-duration: 0.25s;
        transition-duration: 0.25s;
        -webkit-transition-timing-function: ease;
        transition-timing-function: ease; }
      .settings-panel .color-tiles .tiles.selected:before {
        width: 10px;
        height: 10px;
        opacity: 1;
        border-width: 1px; }
      .settings-panel .color-tiles .tiles.light {
        border: 1px solid #e2e4e7; }
  .settings-panel .chat-list {
    padding-left: 0; }
    .settings-panel .chat-list .list {
      padding: 0.4rem 0.8rem;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      border-bottom: 1px solid #e4e9f0; }
      .settings-panel .chat-list .list:last-child {
        border-bottom: none; }
      .settings-panel .chat-list .list .profile {
        position: relative;
        margin-right: 1rem; }
        .settings-panel .chat-list .list .profile img {
          width: 2.50rem;
          height: 2.50rem;
          border-radius: 100%; }
        .settings-panel .chat-list .list .profile span {
          height: 0.75rem;
          width: 0.75rem;
          position: absolute;
          bottom: 0.34rem;
          right: 0;
          border: 0.13rem solid #ffffff;
          border-radius: 100%; }
          .settings-panel .chat-list .list .profile span.online {
            background: #00d284; }
          .settings-panel .chat-list .list .profile span.offline {
            background: #ff5730; }
      .settings-panel .chat-list .list .info {
        margin-right: auto; }
        .settings-panel .chat-list .list .info p {
          display: block;
          margin-bottom: 0; }
          .settings-panel .chat-list .list .info p:last-child {
            opacity: 0.5;
            font-size: 0.8rem; }
      .settings-panel .chat-list .list.active {
        background: #f8f9fa; }
  .settings-panel.open {
    right: 0;
    -webkit-box-shadow: 7px 0px 80px -9px rgba(0, 0, 0, 0.15);
    box-shadow: 7px 0px 80px -9px rgba(0, 0, 0, 0.15); }
  .settings-panel .settings-close {
    position: absolute;
    top: 8px;
    right: 10px;
    color: #ffffff;
    background: transparent;
    border-radius: 4px;
    padding: 0 3px;
    cursor: pointer;
    -webkit-transition-duration: 0.2s;
    transition-duration: 0.2s;
    z-index: 999; }
    .settings-panel .settings-close:hover {
      background: rgba(255, 255, 255, 0.3); }
    .rtl .settings-panel .settings-close {
      right: unset;
      left: 10px; }
  .settings-panel .events p {
    font-family: "Open Sans", sans-serif;
    font-weight: 400; }
  .rtl .settings-panel {
    right: unset;
    left: -300px;
    -webkit-transition-property: left;
    transition-property: left; }
    .rtl .settings-panel .chat-list {
      padding-right: 0; }
      .rtl .settings-panel .chat-list .list .profile {
        margin-right: 0;
        margin-left: 1rem; }
      .rtl .settings-panel .chat-list .list .info {
        margin-right: 0;
        margin-left: auto; }
        .rtl .settings-panel .chat-list .list .info .badge {
          margin-right: 10px; }
    .rtl .settings-panel.open {
      left: 0;
      right: unset; }

#theme-settings .settings-close {
  top: 12px; }

#settings-trigger {
  position: fixed;
  bottom: 40px;
  right: 30px;
  height: 45px;
  width: 45px;
  background: #0033c4;
  z-index: 99;
  -webkit-box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
  box-shadow: 0px 0px 31px 6px rgba(0, 0, 0, 0.17);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  border-radius: 100%;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-delay: 1s;
  animation-delay: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }
  #settings-trigger i {
    color: #ffffff;
    font-size: 1rem;
    line-height: 1rem; }
  @media (max-width: 991px) {
    #settings-trigger {
      display: none; } }

/* Navbar */
.navbar {
  font-family: "Open Sans", sans-serif;
  font-weight: 300;
  left: 260px;
  transition: left 0.25s ease;
  -webkit-transition: left 0.25s ease;
  -moz-transition: left 0.25s ease;
  -ms-transition: left 0.25s ease; }
  .navbar .navbar-brand {
    width: 110px; }
  .navbar .navbar-brand-wrapper {
    height: 60px; }
    @media (max-width: 991px) {
      .navbar .navbar-brand-wrapper {
        width: 55px; } }
    .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
      display: none; }
  .navbar .navbar-menu-wrapper {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    color: #fff;
    padding-left: 24px;
    padding-right: 16px;
    width: calc(100% - 260px);
    height: 60px;
    background: #0033c4;
    position: relative; }
    @media (max-width: 991px) {
      .navbar .navbar-menu-wrapper {
        width: 100%;
        padding-left: 15px;
        padding-right: 15px;
        margin-left: auto; } }
    .navbar .navbar-menu-wrapper .navbar-toggler {
      border: 0;
      color: #fff;
      height: 60px;
      width: 48px;
      background: #ff0854;
      right: 100%;
      border-bottom-left-radius: 50px;
      border-top-left-radius: 50px;
      position: absolute; }
      .navbar .navbar-menu-wrapper .navbar-toggler:focus {
        -webkit-box-shadow: none;
        box-shadow: none; }
      @media (max-width: 991px) {
        .navbar .navbar-menu-wrapper .navbar-toggler {
          position: static;
          background: transparent;
          border-radius: 0; } }
      .rtl .navbar .navbar-menu-wrapper .navbar-toggler {
        right: auto;
        left: 100%;
        border-radius: 0;
        border-bottom-right-radius: 50px;
        border-top-right-radius: 50px; }
      .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
        font-size: 20px; }
        @media (max-width: 991px) {
          .navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
            display: none; } }
      @media (max-width: 991px) {
        .navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
          padding-left: 15px;
          padding-right: 11px;
          border-right: none; } }
    .navbar .navbar-menu-wrapper .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
        color: inherit;
        font-size: 0.875rem;
        margin: 0 10px 0 10px;
        height: 60px;
        font-weight: 600;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }
        @media (max-width: 767px) {
          .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
            margin-left: 0.8rem;
            margin-right: 0.8rem; } }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i {
          font-size: 1.25rem; }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle:after {
        color: #fff;
        opacity: 0.8;
        font-size: 1rem; }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu {
        border: none;
        border-radius: 5px;
        -webkit-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2); }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
          position: absolute;
          font-size: 14px;
          border-radius: 0.375rem;
          margin-top: 0;
          -webkit-box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
          box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
          padding: 0; }
          .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown {
            right: 0;
            left: auto; }
          .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item {
            margin-bottom: 0;
            padding: 15px 13px;
            cursor: pointer; }
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item i {
              font-size: 17px; }
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item .ellipsis {
              max-width: 200px;
              overflow: hidden;
              text-overflow: ellipsis; }
            .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item i {
              margin-left: 10px; }
            .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-item:hover {
              background: #f7f8f9;
              color: #000000; }
          .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.navbar-dropdown .dropdown-divider {
            margin: 0; }
        @media (min-width: 992px) {
          .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu:before {
            content: "";
            border: 10px solid transparent;
            height: 0;
            width: 0;
            border-bottom: 8px solid white;
            position: absolute;
            left: 10px;
            bottom: 100%;
            border-radius: 2px; }
            .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu:before {
              left: auto;
              right: 10px; } }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-menu.center:before {
          left: 67px; }
      @media (max-width: 991px) {
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
          position: static; }
          .navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
            left: 20px;
            right: 20px;
            top: 60px;
            width: calc(100% - 40px); } }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings {
        padding-left: 20px;
        padding-right: 5px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-settings .nav-link {
          margin-right: 0;
          margin-left: 0; }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img {
        position: relative;
        width: 32px;
        height: 32px; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-img img {
          width: 32px;
          height: 32px;
          border-radius: 100%; }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text {
        margin-left: 1.25rem;
        font-weight: 600; }
        .rtl .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text {
          margin-left: 0;
          margin-right: 1.25rem; }
        .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text p {
          line-height: 1;
          font-size: 14px; }
        @media (max-width: 767px) {
          .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link .nav-profile-text {
            display: none; } }
      .navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link.dropdown-toggle:after {
        line-height: 2;
        color: #8e94a9;
        opacity: 1;
        font-size: 18px; }
      .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
        margin-left: auto; }
        @media (min-width: 992px) {
          .rtl .navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
            margin-left: 0;
            margin-right: auto; } }
  .navbar.navbar-index {
    left: 0; }

@media (max-width: 991px) {
  .navbar {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    left: 0;
    background: inherit; }
    .navbar .navbar-brand-wrapper {
      width: 75px; }
      .rtl .navbar .navbar-brand-wrapper {
        width: 54px; }
      .navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
        display: none; }
      .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
        display: inline-block; }
        .rtl .navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
          margin-left: 19px; }
  .navbar-collapse {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0.5rem; } }

/* Navbar color variations */
.navbar.navbar-primary .navbar-menu-wrapper {
  background: #0033c4;
  color: #ffffff; }
  .navbar.navbar-primary .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-primary .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-primary .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-primary .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-primary .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-secondary .navbar-menu-wrapper {
  background: #a0a0a0;
  color: #ffffff; }
  .navbar.navbar-secondary .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-secondary .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-secondary .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-secondary .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-secondary .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-success .navbar-menu-wrapper {
  background: #00d284;
  color: #ffffff; }
  .navbar.navbar-success .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-success .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-success .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-success .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-success .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-info .navbar-menu-wrapper {
  background: #00cff4;
  color: #ffffff; }
  .navbar.navbar-info .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-info .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-info .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-info .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-info .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-warning .navbar-menu-wrapper {
  background: #ff5730;
  color: #ffffff; }
  .navbar.navbar-warning .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-warning .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-warning .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-warning .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-warning .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-danger .navbar-menu-wrapper {
  background: #ff0854;
  color: #ffffff; }
  .navbar.navbar-danger .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-danger .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-danger .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-danger .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-danger .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-light .navbar-menu-wrapper {
  background: #f8f9fa;
  color: #ffffff; }
  .navbar.navbar-light .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-light .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-light .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-light .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-light .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

.navbar.navbar-dark .navbar-menu-wrapper {
  background: #3e4b5b;
  color: #ffffff; }
  .navbar.navbar-dark .navbar-menu-wrapper .search-field .input-group input:-ms-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-dark .navbar-menu-wrapper .search-field .input-group input:-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-dark .navbar-menu-wrapper .search-field .input-group input::-moz-placeholder {
    color: #ffffff; }
  .navbar.navbar-dark .navbar-menu-wrapper .search-field .input-group input::-webkit-input-placeholder {
    color: #ffffff; }
  .navbar.navbar-dark .navbar-menu-wrapper .search-field .input-group i {
    color: #ffffff; }

.navbar.navbar-light .navbar-menu-wrapper {
  color: #000000; }

/* Sidebar */
.sidebar {
  min-height: calc(100vh - 60px);
  background: #ffffff;
  font-family: "Open Sans", sans-serif;
  font-weight: 400;
  padding: 0;
  width: 260px;
  z-index: 11;
  border-right: 1px solid #e4e9f0;
  transition: width 0.25s ease, background 0.25s ease;
  -webkit-transition: width 0.25s ease, background 0.25s ease;
  -moz-transition: width 0.25s ease, background 0.25s ease;
  -ms-transition: width 0.25s ease, background 0.25s ease; }
  .sidebar .nav {
    overflow: hidden;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-bottom: 60px;
    width: inherit; }
    .sidebar .nav .nav-item-head {
      padding: 0 2.25rem;
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase; }
    .sidebar .nav .nav-item {
      padding: 0 2.25rem;
      -webkit-transition-duration: 0.25s;
      transition-duration: 0.25s;
      transition-property: background;
      -webkit-transition-property: background; }
      .sidebar .nav .nav-item .collapse {
        z-index: 999; }
      .sidebar .nav .nav-item .nav-link {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        white-space: nowrap;
        padding: 10px 0 10px 0;
        color: #3e4b5b;
        -webkit-transition-duration: 0.45s;
        transition-duration: 0.45s;
        transition-property: color;
        -webkit-transition-property: color; }
        .sidebar .nav .nav-item .nav-link i {
          color: inherit; }
          .sidebar .nav .nav-item .nav-link i.menu-icon {
            font-size: 20px;
            line-height: 1.2;
            margin-right: 10px;
            color: #6a6b83; }
            .rtl .sidebar .nav .nav-item .nav-link i.menu-icon {
              margin-right: 0;
              margin-left: 10px; }
            .sidebar .nav .nav-item .nav-link i.menu-icon:before {
              vertical-align: middle; }
          .sidebar .nav .nav-item .nav-link i.menu-arrow {
            font: normal normal normal 24px/1 "Material Design Icons";
            line-height: 1;
            font-size: 16px;
            margin-left: auto;
            color: #423a8e;
            opacity: 0.36; }
            .rtl .sidebar .nav .nav-item .nav-link i.menu-arrow {
              margin-left: 0;
              margin-right: auto; }
            .sidebar .nav .nav-item .nav-link i.menu-arrow:before {
              content: "\f142";
              font-size: inherit;
              color: inherit; }
              .rtl .sidebar .nav .nav-item .nav-link i.menu-arrow:before {
                content: "\f141"; }
            .sidebar .nav .nav-item .nav-link i.menu-arrow + .menu-icon {
              margin-left: 0.25rem; }
              .rtl .sidebar .nav .nav-item .nav-link i.menu-arrow + .menu-icon {
                margin-left: 0;
                margin-right: 0.25rem; }
        .sidebar .nav .nav-item .nav-link small, .sidebar .nav .nav-item .nav-link .small {
          display: block; }
        .sidebar .nav .nav-item .nav-link .menu-title {
          color: #141212;
          display: inline-block;
          font-size: 0.875rem;
          line-height: 1;
          vertical-align: middle;
          white-space: normal; }
        .sidebar .nav .nav-item .nav-link .badge {
          margin-right: auto;
          margin-left: 1rem; }
        .sidebar .nav .nav-item .nav-link .sidebar-brand-logomini {
          display: none; }
        .sidebar .nav .nav-item .nav-link[aria-expanded="true"] .menu-arrow:before {
          content: "\f140"; }
      .sidebar .nav .nav-item form .input-group .input-group-prepend .input-group-text {
        padding-left: 16px;
        height: 30px;
        background: #f7f8f9;
        color: #8e94a9;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px; }
        .rtl .sidebar .nav .nav-item form .input-group .input-group-prepend .input-group-text {
          border-radius: 0;
          border-top-right-radius: 50px;
          border-bottom-right-radius: 50px; }
      .sidebar .nav .nav-item form .input-group .form-control, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single, .select2-container--default .sidebar .nav .nav-item form .input-group .select2-selection--single, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .sidebar .nav .nav-item form .input-group .select2-search__field, .sidebar .nav .nav-item form .input-group .typeahead,
      .sidebar .nav .nav-item form .input-group .tt-query,
      .sidebar .nav .nav-item form .input-group .tt-hint {
        font-size: 10px;
        padding: 0;
        height: 30px;
        background: #f7f8f9;
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px; }
        .sidebar .nav .nav-item form .input-group .form-control::-webkit-input-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .sidebar .nav .nav-item form .input-group .select2-selection--single::-webkit-input-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .sidebar .nav .nav-item form .input-group .select2-search__field::-webkit-input-placeholder, .sidebar .nav .nav-item form .input-group .typeahead::-webkit-input-placeholder, .sidebar .nav .nav-item form .input-group .tt-query::-webkit-input-placeholder, .sidebar .nav .nav-item form .input-group .tt-hint::-webkit-input-placeholder {
          color: #a0a0a0; }
        .sidebar .nav .nav-item form .input-group .form-control::-moz-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .sidebar .nav .nav-item form .input-group .select2-selection--single::-moz-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .sidebar .nav .nav-item form .input-group .select2-search__field::-moz-placeholder, .sidebar .nav .nav-item form .input-group .typeahead::-moz-placeholder, .sidebar .nav .nav-item form .input-group .tt-query::-moz-placeholder, .sidebar .nav .nav-item form .input-group .tt-hint::-moz-placeholder {
          color: #a0a0a0; }
        .sidebar .nav .nav-item form .input-group .form-control:-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .sidebar .nav .nav-item form .input-group .select2-selection--single:-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .sidebar .nav .nav-item form .input-group .select2-search__field:-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .typeahead:-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .tt-query:-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .tt-hint:-ms-input-placeholder {
          color: #a0a0a0; }
        .sidebar .nav .nav-item form .input-group .form-control::-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single::-ms-input-placeholder, .select2-container--default .sidebar .nav .nav-item form .input-group .select2-selection--single::-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field::-ms-input-placeholder, .select2-container--default .select2-selection--single .sidebar .nav .nav-item form .input-group .select2-search__field::-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .typeahead::-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .tt-query::-ms-input-placeholder, .sidebar .nav .nav-item form .input-group .tt-hint::-ms-input-placeholder {
          color: #a0a0a0; }
        .sidebar .nav .nav-item form .input-group .form-control::placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single::placeholder, .select2-container--default .sidebar .nav .nav-item form .input-group .select2-selection--single::placeholder, .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field::placeholder, .select2-container--default .select2-selection--single .sidebar .nav .nav-item form .input-group .select2-search__field::placeholder, .sidebar .nav .nav-item form .input-group .typeahead::placeholder,
        .sidebar .nav .nav-item form .input-group .tt-query::placeholder,
        .sidebar .nav .nav-item form .input-group .tt-hint::placeholder {
          color: #a0a0a0; }
        .rtl .sidebar .nav .nav-item form .input-group .form-control, .rtl .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single, .select2-container--default .rtl .sidebar .nav .nav-item form .input-group .select2-selection--single, .rtl .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .rtl .sidebar .nav .nav-item form .input-group .select2-search__field, .rtl .sidebar .nav .nav-item form .input-group .typeahead,
        .rtl .sidebar .nav .nav-item form .input-group .tt-query,
        .rtl .sidebar .nav .nav-item form .input-group .tt-hint {
          border-radius: 0;
          border-top-left-radius: 50px;
          border-bottom-left-radius: 50px; }
      .sidebar .nav .nav-item:not(:nth-child(2)).active {
        background: #1a55e3; }
        .sidebar .nav .nav-item:not(:nth-child(2)).active > .nav-link .menu-title {
          color: #ffffff;
          font-family: "Open Sans", sans-serif;
          font-weight: 600; }
          .sidebar-icon-only .sidebar .nav .nav-item:not(:nth-child(2)).active > .nav-link .menu-title {
            color: #000000; }
        .sidebar .nav .nav-item:not(:nth-child(2)).active > .nav-link i {
          color: #ffffff; }
        .sidebar .nav .nav-item:not(:nth-child(2)).active .sub-menu .nav-link {
          color: #dfe2e8; }
          .sidebar .nav .nav-item:not(:nth-child(2)).active .sub-menu .nav-link.active {
            color: #ffffff; }
            .sidebar-icon-only .sidebar .nav .nav-item:not(:nth-child(2)).active .sub-menu .nav-link.active {
              color: #000000; }
      .sidebar .nav .nav-item.nav-profile .nav-link {
        height: auto;
        line-height: 1;
        border-top: 0;
        display: block;
        padding: 27px 0 0 0; }
        .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-image {
          width: 65px;
          height: 65px;
          margin: auto; }
          .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-image img {
            width: 65px;
            height: 65px;
            border-radius: 100%; }
        .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-text {
          margin-left: 1rem; }
          .rtl .sidebar .nav .nav-item.nav-profile .nav-link .nav-profile-text {
            margin-left: auto;
            margin-right: 1rem; }
    .sidebar .nav.sub-menu {
      margin-bottom: 20px;
      margin-left: 9px;
      margin-top: 0;
      list-style: none;
      border-left: 1px solid #e4e9f0; }
      .rtl .sidebar .nav.sub-menu {
        border: 0;
        margin-right: 9px;
        border-right: 1px solid #e4e9f0; }
      .sidebar-icon-only .sidebar .nav.sub-menu {
        margin-left: 36px;
        padding: 0; }
      .sidebar .nav.sub-menu .nav-item {
        padding: 0; }
        .sidebar .nav.sub-menu .nav-item .nav-link {
          color: #3e4b5b;
          padding: 0.75rem 2rem 0.75rem 15px;
          position: relative;
          font-size: 0.8125rem;
          line-height: 1;
          height: auto;
          border-top: 0; }
          .sidebar .nav.sub-menu .nav-item .nav-link.active {
            color: #ffffff;
            font-weight: 600;
            background: transparent; }
          .sidebar .nav.sub-menu .nav-item .nav-link:hover {
            color: #15191e; }
        .sidebar .nav.sub-menu .nav-item:hover {
          background: transparent; }

.sidebar-dark .sidebar {
  background: #18151e; }
  .sidebar-dark .sidebar .nav .nav-item .nav-link {
    color: #ffffff; }
    .sidebar-dark .sidebar .nav .nav-item .nav-link i {
      color: inherit; }
      .sidebar-dark .sidebar .nav .nav-item .nav-link i.menu-icon {
        color: #ffffff; }
      .sidebar-dark .sidebar .nav .nav-item .nav-link i.menu-arrow {
        color: #ffffff; }
        .sidebar-dark .sidebar .nav .nav-item .nav-link i.menu-arrow:before {
          color: inherit; }
    .sidebar-dark .sidebar .nav .nav-item .nav-link .menu-title {
      color: inherit; }
  .sidebar-dark .sidebar .nav .nav-item.active > .nav-link .menu-title {
    color: #ffffff; }
  .sidebar-dark .sidebar .nav .nav-item.active > .nav-link i {
    color: theme-color(white); }
  .sidebar-dark .sidebar .nav .nav-item:hover {
    color: white; }
  .sidebar-dark .sidebar .nav .nav-item.sidebar-actions:hover {
    background: initial; }
    .sidebar-dark .sidebar .nav .nav-item.sidebar-actions:hover .nav-link {
      color: initial; }
  .sidebar-dark .sidebar .nav .nav-item-head {
    color: #ffffff; }
  .sidebar-dark .sidebar .nav:not(.sub-menu) > .nav-item:hover:not(.nav-category):not(.nav-profile) > .nav-link {
    color: color(white); }
  .sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link {
    color: #ffffff; }
    .sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:before {
      color: white; }
    .sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link.active {
      color: #ffffff;
      background: transparent; }
    .sidebar-dark .sidebar .nav.sub-menu .nav-item .nav-link:hover {
      color: #b3b3b3; }
  .sidebar-dark .sidebar .nav.sub-menu .nav-item:hover {
    background: transparent; }

/* style for off-canvas menu*/
@media screen and (max-width: 991px) {
  .sidebar-offcanvas {
    position: fixed;
    max-height: calc(100vh - 60px);
    top: 60px;
    bottom: 0;
    overflow: auto;
    right: -260px;
    -webkit-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out; }
    .sidebar-offcanvas.active {
      right: 0; } }

/* Layouts */
.navbar.fixed-top + .page-body-wrapper {
  padding-top: 60px; }

@media (min-width: 992px) {
  .sidebar-mini .navbar {
    left: 185px; }
    .sidebar-mini .navbar .navbar-brand-wrapper {
      width: 185px; }
    .sidebar-mini .navbar .navbar-menu-wrapper {
      width: calc(100% - 185px); }
  .sidebar-mini .sidebar {
    width: 185px; }
    .sidebar-mini .sidebar .nav .nav-item {
      padding: 0;
      margin: 0; }
      .sidebar-mini .sidebar .nav .nav-item .nav-link {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: reverse;
        -ms-flex-direction: column-reverse;
        flex-direction: column-reverse;
        text-align: center;
        position: relative;
        border-bottom: none; }
        .sidebar-mini .sidebar .nav .nav-item .nav-link .menu-title {
          display: block;
          margin: auto; }
        .sidebar-mini .sidebar .nav .nav-item .nav-link .menu-sub-title {
          margin: auto; }
        .sidebar-mini .sidebar .nav .nav-item .nav-link .badge {
          margin-left: 5px;
          display: none; }
        .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-icon {
          display: block;
          margin-right: auto;
          margin-left: auto; }
        .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-arrow {
          display: inline-block;
          margin-left: 5px;
          position: absolute;
          top: 50%;
          right: 10px;
          -webkit-transform: translateY(-50%);
          transform: translateY(-50%); }
          .sidebar-mini .sidebar .nav .nav-item .nav-link i.menu-arrow:before {
            content: "\F140"; }
        .sidebar-mini .sidebar .nav .nav-item .nav-link[aria-expanded="true"] .menu-arrow:before {
          content: "\f143"; }
  .sidebar-mini .main-panel {
    width: 100%; }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav:not(.sub-menu) > .nav-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.2); }
    .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav:not(.sub-menu) > .nav-item .nav-link {
      height: auto;
      padding: 0.8125rem 1rem 0.8125rem 1rem; }
      .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav:not(.sub-menu) > .nav-item .nav-link i.menu-icon {
        margin-bottom: 0.5rem; }
  .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu {
    padding: 0;
    border-top: none; }
    .sidebar-mini:not(.sidebar-icon-only) .sidebar .nav.sub-menu .nav-item .nav-link {
      padding: 7px 0 7px 25px;
      margin-left: auto;
      margin-right: auto;
      display: block;
      text-align: left;
      width: 66%; } }

@media (min-width: 992px) {
  .sidebar-icon-only .navbar {
    left: 70px; }
    .sidebar-icon-only .navbar .navbar-menu-wrapper {
      width: calc(100% - 70px); }
      .sidebar-icon-only .navbar .navbar-menu-wrapper .navbar-toggler span:before {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg); }
  .sidebar-icon-only .sidebar {
    width: 70px;
    padding-top: 55px; }
    .sidebar-icon-only .sidebar .nav {
      overflow: visible; }
      .sidebar-icon-only .sidebar .nav .nav-item-head {
        display: none; }
      .sidebar-icon-only .sidebar .nav .nav-item {
        position: relative;
        padding: 0; }
        .sidebar-icon-only .sidebar .nav .nav-item .nav-link {
          display: block;
          text-align: center; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title,
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .badge,
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-sub-title {
            display: none; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
            border-radius: 0 5px 5px 0px; }
            .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link .menu-title {
              border-radius: 5px 0 0 5px; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-icon {
            margin-right: 0;
            margin-left: 0; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link i.menu-arrow {
            display: none; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .sidebar-brand-logo {
            display: none; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .sidebar-brand-logomini {
            display: block;
            margin: auto; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link .small {
            display: none; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
            border-radius: 0 5px 0 0px; }
            .rtl.sidebar-icon-only .sidebar .nav .nav-item .nav-link[aria-expanded] .menu-title {
              border-radius: 5px 0 0 0; }
          .sidebar-icon-only .sidebar .nav .nav-item .nav-link small, .sidebar-icon-only .sidebar .nav .nav-item .nav-link .small {
            display: none; }
        .sidebar-icon-only .sidebar .nav .nav-item form .input-group {
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center; }
          .sidebar-icon-only .sidebar .nav .nav-item form .input-group .input-group-prepend .input-group-text {
            border-radius: 0;
            background: none; }
          .sidebar-icon-only .sidebar .nav .nav-item form .input-group .form-control, .sidebar-icon-only .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single, .select2-container--default .sidebar-icon-only .sidebar .nav .nav-item form .input-group .select2-selection--single, .sidebar-icon-only .sidebar .nav .nav-item form .input-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .sidebar-icon-only .sidebar .nav .nav-item form .input-group .select2-search__field, .sidebar-icon-only .sidebar .nav .nav-item form .input-group .typeahead,
          .sidebar-icon-only .sidebar .nav .nav-item form .input-group .tt-query,
          .sidebar-icon-only .sidebar .nav .nav-item form .input-group .tt-hint {
            display: none; }
        .sidebar-icon-only .sidebar .nav .nav-item.nav-profile {
          display: none; }
        .sidebar-icon-only .sidebar .nav .nav-item.nav-category {
          display: none; }
        .sidebar-icon-only .sidebar .nav .nav-item.nav-doc {
          margin: 0; }
          .sidebar-icon-only .sidebar .nav .nav-item.nav-doc i {
            display: block; }
        .sidebar-icon-only .sidebar .nav .nav-item .collapse {
          display: none; }
        .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          background: #fcfcfc;
          padding: 0.5rem 1.4rem;
          left: 70px;
          position: absolute;
          text-align: left;
          top: 0;
          bottom: 0;
          width: 190px;
          z-index: 1;
          line-height: 1.8; }
          .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
            background: #1a55e3; }
          .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
            left: auto;
            right: 70px;
            text-align: left; }
          .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title {
            color: #ffffff; }
          .sidebar-icon-only .sidebar .nav .nav-item.hover-open .nav-link .menu-title:after {
            display: none; }
        .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse,
        .sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
          display: block;
          padding: 0.5rem 0;
          background: #fcfcfc;
          border-radius: 0 0 5px 0;
          position: absolute;
          left: 70px;
          width: 190px; }
          .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .sidebar-dark.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
            background: #18151e; }
          .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapse, .rtl.sidebar-icon-only .sidebar .nav .nav-item.hover-open .collapsing {
            left: auto;
            right: 70px;
            border-radius: 0 0 0 5px; }
      .sidebar-icon-only .sidebar .nav.sub-menu {
        padding: 0 0 0 1.5rem; }
        .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
          text-align: left;
          padding-left: 20px; }
          .sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link.active {
            color: #000000; }
        .rtl.sidebar-icon-only .sidebar .nav.sub-menu .nav-item {
          margin-right: auto;
          margin-left: 0; }
          .rtl.sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link {
            text-align: right; }
            .rtl.sidebar-icon-only .sidebar .nav.sub-menu .nav-item .nav-link:before {
              left: 0;
              right: unset; }
    .sidebar-icon-only .sidebar .sidebar-actions {
      display: none; }
  .sidebar-icon-only .main-panel {
    width: 100%; } }

@media (min-width: 992px) {
  .sidebar-hidden .navbar {
    left: 0; }
    .sidebar-hidden .navbar .navbar-menu-wrapper {
      width: 100%;
      margin-left: 48px; }
  .sidebar-hidden .sidebar {
    transition: width 0.25s ease;
    -webkit-transition: width 0.25s ease;
    -moz-transition: width 0.25s ease;
    -ms-transition: width 0.25s ease;
    width: 0; }
  .sidebar-hidden .main-panel {
    width: 100%; } }

@media (min-width: 992px) {
  .sidebar-absolute .page-body-wrapper {
    position: relative; }
    .sidebar-absolute .page-body-wrapper .sidebar {
      -webkit-transition: none;
      transition: none; }
  .sidebar-absolute:not(.sidebar-hidden) .sidebar {
    position: absolute;
    -webkit-box-shadow: 0 0 3px 1px #a7a3a3;
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    /* Firefox 3.5 - 3.6 */
    box-shadow: 0 0 3px 1px #a7a3a3;
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */ }
  .sidebar-absolute .main-panel {
    width: 100%;
    -webkit-transition: none;
    transition: none; } }

@media (min-width: 992px) {
  .sidebar-fixed .sidebar {
    position: fixed;
    max-height: auto; }
    .sidebar-fixed .sidebar .nav {
      max-height: calc(100vh - 60px);
      overflow: auto;
      position: relative; }
      .sidebar-fixed .sidebar .nav.sub-menu {
        max-height: none; }
  .sidebar-fixed .main-panel {
    margin-left: 260px; }
  .sidebar-fixed.sidebar-icon-only .main-panel {
    margin-left: 70px; } }

@media (min-width: 992px) {
  .boxed-layout .container-scroller {
    background: #e1d7ea;
    padding: 0 calc((100% - 1200px) / 2); }
  .boxed-layout .navbar {
    background: transparent; }
    .boxed-layout .navbar.fixed-top {
      margin: 0 calc((100% - 1200px) / 2);
      max-width: 1200px; } }

.rtl {
  direction: rtl;
  text-align: right; }
  .rtl .sidebar .nav {
    padding-right: 0; }
  .rtl .page-body-wrapper {
    transition: all 0.25s ease;
    -webkit-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    -ms-transition: all 0.25s ease; }
  .rtl .navbar {
    transition: all 0.25s ease;
    -webkit-transition: all 0.25s ease;
    -moz-transition: all 0.25s ease;
    -ms-transition: all 0.25s ease;
    right: 260px; }
    @media (max-width: 900px) {
      .rtl .navbar {
        right: 0; } }
  .rtl.sidebar-icon-only .navbar {
    right: 0;
    left: 0; }
  .rtl .product-chart-wrapper::-webkit-scrollbar,
  .rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar,
  .rtl .sidebar-fixed .nav::-webkit-scrollbar,
  .rtl .table-responsive::-webkit-scrollbar,
  .rtl ul.chats::-webkit-scrollbar {
    width: 0.5em; }
  .rtl .product-chart-wrapper::-webkit-scrollbar-track,
  .rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-track,
  .rtl .sidebar-fixed .nav::-webkit-scrollbar-track,
  .rtl .table-responsive::-webkit-scrollbar-track,
  .rtl ul.chats::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3); }
  .rtl .product-chart-wrapper::-webkit-scrollbar-thumb,
  .rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-thumb,
  .rtl .sidebar-fixed .nav::-webkit-scrollbar-thumb,
  .rtl .table-responsive::-webkit-scrollbar-thumb,
  .rtl ul.chats::-webkit-scrollbar-thumb {
    background-color: darkgrey;
    outline: 1px solid slategrey; }

.container-scroller {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }

.page-body-wrapper {
  min-height: calc(100vh - 60px);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  padding-left: 0;
  padding-right: 0; }
  @media (min-width: 992px) {
    .page-body-wrapper {
      width: calc(100% - 260px); } }
  .page-body-wrapper.full-page-wrapper {
    width: 100%;
    min-height: 100vh; }

.main-panel {
  -webkit-transition: width 0.25s ease, margin 0.25s ease;
  transition: width 0.25s ease, margin 0.25s ease;
  width: 100%;
  min-height: calc(100vh - 60px);
  padding-top: 60px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  @media (max-width: 991px) {
    .main-panel {
      margin-left: 0;
      width: 100%; } }

.content-wrapper {
  background: #f8f9fb;
  padding: 25px 27px;
  padding-bottom: 0;
  width: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }


    </style>
    <title>PROFIL PESERTA DIDIK </title>
</head>

<body>
    <section class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="text-center">PROFIL PESERTA DIDIK </h4>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-borderless">
                                <tr>
                                    <td style="width:300px">1. Nama Peserta Didik </td>
                                    <td>:</td>
                                    <td><?= $record->nama_siswa ?></td>
                                </tr>
                                <tr>
                                    <td>2. Nomor Induk</td>
                                    <td>:</td>
                                    <td><?= $record->no_induk ?></td>
                                </tr>
                                <tr>
                                    <td>3. Tempat, Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $record->tempat_lahir }} {{ $record->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>4. Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $record->jenis_kelamin ?></td>
                                </tr>
                                <tr>
                                    <td>5. Agama</td>
                                    <td>:</td>
                                    <td><?= $record->agama ?></td>
                                </tr>
                                <tr>
                                    <td>6. Anak Ke</td>
                                    <td>:</td>
                                    <td><?= $record->anak_ke ?></td>
                                </tr>
                                <tr>
                                    <td>7. Alamat Peserta Didik </td>
                                    <td>:</td>
                                    <td><?= $record->alamat_siswa ?></td>
                                </tr>
                                <tr>
                                    <td colspan="3">8. Nama Orang Tua</td>
                                </tr>
                                <tr>
                                    <td>a. Ayah</td>
                                    <td>:</td>
                                    <td>{{ $record->nama_ayah }}</td>
                                <tr>
                                    <td>b. Ibu</td>
                                    <td>:</td>
                                    <td>{{ $record->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">9. Pekerjaan Orang Tua</td>
                                </tr>
                                <tr>
                                    <td>a. Ayah</td>
                                    <td>:</td>
                                    <td>{{ $record->pekerjaan_ayah }}</td>
                                <tr>
                                    <td>b. Ibu</td>
                                    <td>:</td>
                                    <td>{{ $record->pekerjaan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">10. Alamat Orang Tua</td>
                                </tr>
                                <tr>
                                    <td>Jalan</td>
                                    <td>:</td>
                                    <td>{{ $record->jalan }}</td>
                                </tr>
                                <tr>
                                    <td>Kelurahan/ Desa</td>
                                    <td>:</td>
                                    <td>{{ $record->kelurahan_desa }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan/ Kota</td>
                                    <td>:</td>
                                    <td>{{ $record->kecamatan_kota }}</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten/Kota</td>
                                    <td>:</td>
                                    <td>{{ $record->kabupaten_kota }}</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>{{ $record->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">11. Wali Peserta Didik </td>
                                </tr>
                                <tr>
                                    <td>a. Nama</td>
                                    <td>:</td>
                                    <td>{{ $record->nama_wali }}</td>
                                </tr>
                                <tr>
                                    <td>b. Pekerjan</td>
                                    <td>:</td>
                                    <td>{{ $record->pekerjaan_wali }}</td>
                                </tr>
                                <tr>
                                    <td>c. Alamat</td>
                                    <td>:</td>
                                    <td>{{ $record->alamat_wali }}</td>
                                </tr>
                            </table>

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img src="" alt="" style="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </section> <!-- end row -->
    <script>
        window.print()
    </script>
</body>

</html>
