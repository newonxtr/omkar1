const radius = 18;
const ringRadius = 80;
const stepCount = 20;
const cycleDuration = 60 * 1;

setTimeout(() => {
  const canvasEl = document.getElementById('js-canvas');
  const {width, height} = canvasEl;
  const canvasCtx = canvasEl.getContext('2d');
  const [centerX, centerY] = [width / 2, height / 2];
  const sliceEl = document.createElement('canvas');
  [sliceEl.width, sliceEl.height] = [radius, radius];
  const sliceCtx = sliceEl.getContext('2d');
  const interpolator = createInterpolator(0, 0.5522848, 1);
  const doodadEl = document.createElement('canvas');
  [doodadEl.width, doodadEl.height] = [radius * 2, radius * 2];
  const doodadCtx = doodadEl.getContext('2d');
  animate(0, doodadCtx, canvasCtx, sliceCtx, interpolator);
}, 0);

function animate (iteration, doodadCtx, canvasCtx, sliceCtx, interpolator) {
  const {width, height} = canvasCtx.canvas;
  canvasCtx.clearRect(0, 0, width, height);
  const stepSize = (Math.PI * 2) / stepCount;
  const centerX = width / 2;
  const centerY = height / 2;
  Array(...Array(stepCount)).forEach((_, index) => {
    const offset = index * (cycleDuration / stepCount);
    let t = ((iteration + cycleDuration - offset) % cycleDuration) / (cycleDuration / 1); // tweak the `1`
    if (t > 0.5) {
      t = 1 - t;
    }
    t *= 2;
    t = Math.max(0, Math.min(1, t));
    const angle = stepSize * index;
    const xPos = centerX + Math.cos(angle) * ringRadius;
    const yPos = centerY + Math.sin(angle) * ringRadius;
    const orbitAngle = Math.atan2(yPos - centerY, xPos - centerX) + Math.PI / 2;
    const color = `hsla(${orbitAngle / (Math.PI / 180)}, 100%, 50%, ${t})`;
    drawDoodad(doodadCtx, sliceCtx, radius, interpolator, t, color);
    canvasCtx.translate(xPos, yPos);
    canvasCtx.rotate(angle);
    canvasCtx.drawImage(doodadCtx.canvas, 0, 0, radius * 2, radius * 2, -radius, -radius, radius * 2, radius * 2);
    canvasCtx.rotate(-angle);
    canvasCtx.translate(-xPos, -yPos);
  });
  requestAnimationFrame(() => {
    animate(iteration + 1, doodadCtx, canvasCtx, sliceCtx, interpolator);
  });
}

function drawDoodad (doodadCtx, sliceCtx, radius, interpolator, t, color) {
  doodadCtx.clearRect(0, 0, radius * 2, radius * 2);
  drawSlice(sliceCtx, radius, interpolator, t, color);
  // begin top left
  doodadCtx.drawImage(sliceCtx.canvas, 0, 0, radius, radius, 0, 0, radius, radius);
  // end top left
  // begin top right
  doodadCtx.translate(radius * 2, 0);
  doodadCtx.rotate(Math.PI / 2);
  doodadCtx.drawImage(sliceCtx.canvas, 0, 0, radius, radius, 0, 0, radius, radius);
  doodadCtx.rotate(-Math.PI / 2);
  doodadCtx.translate(-radius * 2, 0);
  // end top right
  // begin bottom
  doodadCtx.translate(radius * 2, radius * 2);
  doodadCtx.rotate(Math.PI);
  doodadCtx.drawImage(doodadCtx.canvas, 0, 0, radius * 2, radius, 0, 0, radius * 2, radius);
  doodadCtx.rotate(-Math.PI);
  doodadCtx.translate(-radius * 2, -radius * 2);
  // end bottom
}

function drawSlice (ctx, radius, interpolator, t, color) {
  ctx.clearRect(0, 0, radius, radius);
  ctx.strokeStyle = '#dedede';
  ctx.fillStyle = color;
  ctx.beginPath();
  ctx.moveTo(2, radius);
  const curveFactor = interpolator(t);
  const x0 = 2;
  const y0 = radius - (radius * curveFactor) + 2;
  const x1 = radius - (radius * curveFactor) + 2;
  const y1 = 2;
  const x2 = radius;
  const y2 = 2;
  ctx.bezierCurveTo(x0, y0, x1, y1, x2, y2);
  ctx.stroke();
  ctx.fill();
  ctx.closePath();
}

function createInterpolator (valueStart, valueDelta, duration) {
  return (t) => {
    t /= duration / 2;
    if (t < 1) {
      return valueDelta / 2 * (t * t) + valueStart;
    }
    t--;
    return -valueDelta / 2 * ( t * (t - 2) - 1) + valueStart;
  };
}