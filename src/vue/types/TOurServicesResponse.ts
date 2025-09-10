export interface TOurServicesResponse {
  our_services: TOurServices;
}

export interface TOurServices {
  items: TItem[];
}

export interface TItem {
  image: string;
  title: string;
  description: string;
}
