import os from "os";

const uptime = os.uptime() / 3600;
console.log(uptime / 60 + " days");
if (uptime / 60 > 14) {
  console.log("restart the computer");
} else {
  console.log("computer is working fine");
}
